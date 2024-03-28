<?php
include_once("inputs.php");
include_once("functions.php");

$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;

$data = explode("\n", $data);

$starMap = [];
for ($i = 0; $i < count($data); $i++) {
    $starMap[$i] = [];
    $data[$i] = trim($data[$i]);
    for ($j = 0; $j < strlen($data[$i]); $j++) {
        $starMap[$i][$j] = $data[$i][$j];
    }
}
$show = $data;

for ($i = 0; $i < count($starMap); $i++) {
    $empty = true;
    for ($j = 0; $j < count($starMap[$i]); $j++) {
        if ($starMap[$i][$j] == "o" || $starMap[$i][$j] == "#") {
            $empty = false;
        } else if ($j === count($starMap[$i]) - 1 && $empty === true) {
            $row = [];
            array_push($row, "o");
            $rowShow = "o";
            for ($k = 1; $k < count($starMap[$i]); $k++) {
                array_push($row, "o");
                $rowShow .= "o";
            }
            // for ($u=0; $u < 9; $u++) { 
                # code...
                array_splice($starMap,  $i, 1, [$row]);
                array_splice($show,  $i, 1, $rowShow);
            // }
        }
    }
}

for ($j = 0; $j < count($starMap[0]); $j++) {
    $empty = true;
    for ($i = 0; $i < count($starMap); $i++) {
        if ($starMap[$i][$j] == "0" || $starMap[$i][$j] == "#") {
            $empty = false;
        } else if ($i === count($starMap) - 1 && $empty === true) {
            $row = [];
            $rowShow = "";
            for ($k = 0; $k < count($starMap); $k++) {
                array_push($row, "0");
                $rowShow .= "0";
                // for ($u=0; $u < 9; $u++) { 
                    array_splice($starMap[$k],  $j, 1, $row[$k]);
                    $show[$k] = substr_replace($show[$k], $rowShow[$k],  $j, 1);
                // }
            }
        }
    }
}

$galaxies = [];
$y = 0;

for ($i=0; $i < count($starMap); $i++) { 
    if ($starMap[$i][0] === "o") $y += 999999;
    $x = 0;
    for ($j=0; $j < count($starMap[$i]) ; $j++) { 
        if ($starMap[$i][$j] === "0") $x += 999999;
        if ($starMap[$i][$j] === "#") {
            array_push($galaxies, [$i+$y,$j+$x]);
        }
    }
}

function pairing($array) {
    $results = [];
    for ($i=0; $i < count($array) ; $i++) { 
        for ($j=$i; $j < count($array) ; $j++) { 
            if ($i != $j) {
                $sumX = abs($array[$i][0] - $array[$j][0]);
                $sumY = abs($array[$i][1] - $array[$j][1]);
                array_push($results, $sumX+$sumY);
            }
        }
    }
    return $results;
}

$distances = pairing($galaxies);
$score = array_sum($distances);

echo '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Day </title>
</head>

<body>
<p>The answer we are looking for is: ' .  $score . ' and the other one is: ' . $counter . '.</p>
</body>

</html>';






echo ("<pre style='display:flex;flex-direction:row;'>");
view($show);
echo ("</pre>");
