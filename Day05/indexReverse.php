<?php
include_once("inputs.php");
include("map.php");

$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;
$arrayMaps = [];
$arrayLocations = [];




function convert($seed, $map)
{
    if ($seed >= $map[1] && $seed <= $map[1] + $map[2]) {
        $seed = $seed + $map[0] - $map[1];
    }
    return $seed;
}

function convertArray($seedRanges, $level)
{
    echo ("<pre>");
    print_r($seedRanges);
    print_r('<br>');
    print_r($level);
    echo ("</pre>");
    $newSeedRanges = [];
    for ($i = 0; $i < sizeof($seedRanges); $i++) {
        $modified = false;
        for ($j = 0; $j < sizeof($level); $j++) {
            // si la range inferieure est incluse dans le level
            if ($seedRanges[$i][0] >= $level[$j][1] && $seedRanges[$i][0] < $level[$j][1] + $level[$j][2]) {
                echo "je proc A avec ";
                print_r($seedRanges[$i]);
                echo '<br>';
                
                // Si la range supérieure est exclue du level
                if ($seedRanges[$i][1] >= $level[$j][1] + $level[$j][2]) {
                    echo "je proc 1 avec ";
                    print_r($seedRanges[$i]);
                    echo '<br>';
                    array_push($newSeedRanges, convert($seedRanges[$i][0], $level[$j]), convert($level[$j][1] + $level[$j][2] - 1, $level[$j]), $level[$j][1] + $level[$j][2], $seedRanges[$i][1]);
                    $modified = true;
                    
                    // Si la range supérieure N'EST PAS exclue
                } else {
                    echo "je proc 2 avec ";
                    print_r($seedRanges[$i]);
                    echo '<br>';
                    array_push($newSeedRanges, convert($seedRanges[$i][0], $level[$j]), convert($seedRanges[$i][1], $level[$j]));
                    $modified = true;
                }

                // Si la range supérieure est inclue
            } else if ($seedRanges[$i][1] >= $level[$j][1] && $seedRanges[$i][1] < $level[$j][1] + $level[$j][2]) {
                echo "je proc B avec ";
                print_r($seedRanges[$i]);
                echo '<br>';

                // Si la range inférieure est exclue
                if ($seedRanges[$i][0] < $level[$j][1]) {
                    echo "je proc 4 avec ";
                    print_r($seedRanges[$i]);
                    echo '<br>';
                    array_push($newSeedRanges, $seedRanges[$i][0], $level[$j][1] - 1, convert($level[$j][1], $level[$j]), convert($seedRanges[$i][1], $level[$j]));
                    $modified = true;
                }
                // Si la range supérieure ET la inférieure sont exclues
            } else if ($seedRanges[$i][0] < $level[$j][1] && $seedRanges[$i][1] >= $level[$j][1] + $level[$j][2]) {
                array_push($newSeedRanges, $seedRanges[$i][0], $level[$j][1] - 1, convert($level[$j][1], $level[$j]), convert($level[$j][1] + $level[$j][2] - 1, $level[$j]), $level[$j][1] + $level[$j][2], $seedRanges[$i][1]);
                $modified = true;
            }
        }
        if ($modified === false) {
            echo "je proc 5 avec ";
            print_r($seedRanges[$i]);
            echo '<br>';
            array_push($newSeedRanges, $seedRanges[$i][0], $seedRanges[$i][1]);
        }
    }
    $seedRanges[$i] = array_unique($newSeedRanges);
    for ($u = 0; $u < sizeof($seedRanges); $u++) {
        for ($v = 0; $v < sizeof($seedRanges); $v++) {
            if ($v !== $u) {
                if ($seedRanges[$u][0] > $seedRanges[$v][0] && $seedRanges[$u][1] < $seedRanges[$v][1] && $seedRanges[$u][0] < $seedRanges[$u][1]) {
                    $seedRanges = array_splice($seedRanges, $u, 1);
                }
            }
        }
    }
    $seedRanges = [];
    for ($k = 0; $k < sizeof($newSeedRanges); $k++) {
        if ($k % 2 === 0) {
            array_push($seedRanges, [$newSeedRanges[$k], $newSeedRanges[$k + 1]]);
        }
    }
    return $seedRanges;
}

function notNull($var)
{
    if ($var != 0) {
        return $var;
    }
}

function reverse($seed, $map) {
    if ($seed >= $map[0] && $seed <= $map[0] + $map[2]) {
        $seed = $seed + $map[1] - $map[0];
    }
    return $seed;
}
$data = explode("\n\r", $data);

for ($i = 0; $i < sizeof($data); $i++) {
    $data[$i] = explode(":", trim($data[$i]));
    $data[$i][0] = explode(" ", trim($data[$i][0]));
    $data[$i][1] = explode("\n", trim($data[$i][1]));
    for ($j = 0; $j < sizeof($data[$i][1]); $j++) {
        $data[$i][1][$j] = explode(" ", trim($data[$i][1][$j]));
    }
}
$seeds = $data[0][1][0];
// $seeds = [];

// $seedsPart2 = [];
// for ($i = 0; $i < sizeof($data[0][1][0]); $i += 2) {
//     array_push($seedsPart2, [$data[0][1][0][$i], $data[0][1][0][$i] + $data[0][1][0][$i + 1]]);
// }

// for ($i = 1; $i < sizeof($data); $i++) {
//     $seedsPart2 = convertArray($seedsPart2, $data[$i][1]);
// }


// foreach ($seedsPart2 as $range) {
//     array_push($arrayLocations, $range[0], $range[1]);
// }

for ($i=0; $i < sizeof($seeds); $i++) { 
    if ($i%2 == 1) {
        $seeds[$i] += $seeds[$i-1];
    }
}

$seedTest = [$seeds[2],$seeds[3]];
for ($k = 0; $k < sizeof($seedTest); $k++) {
    for ($i = 1; $i < sizeof($data) ; $i++) {
        for ($j = 0; $j < sizeof($data[$i][1]); $j++) {
            $seed2 = convert($seedTest[$k], $data[$i][1][$j]);
            if ($seed2 != $seedTest[$k]) {
                $seedTest[$k] = $seed2;
                break;
            }
        }
    }
}


// $score = $seedTest;

// $superSeed = array_map(function ($val) use ($seedTest) {
//     return abs($val-$seedTest) ;
// }, $seeds);
// $counter = min(array_filter($arrayLocations, function ($val) {
//     return $val != 0;
// }));

$counter = min($seedTest);


?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Day 05 - Filter</title>
    </head>

    <body>
        <p>The answer we're looking for is: <?= $score ?> and the other one is: <?= $counter ?>.</p>
    </body>
    
    </html>
    
    <?php


echo ("<pre style='display:flex;flex-direction:row;'>");
// echo ("<div>");
// print_r($seedsPart2);
// echo ("</div>");
// echo ("<div>");
// print_r($arrayLocations);
// echo ("</div>");
echo ("<pre>");
print_r($data);
echo ("</pre>");


/* 510109797 is good


############################ PART 2 ###############################



2 280 650 867    ###     2 milliards de graines

2 695 483 too low

2 963 965 043 too high

2 205 270 016 wrong


*/
