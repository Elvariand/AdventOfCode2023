<?php
include_once("inputs.php");

// $data = $trial;
$data = $input;

$data = explode("\n", $data);
$score = 0;
$counter = 0;
$engine = [];
$addedNumbers = [];

for ($i = 0; $i < sizeof($data); $i++) {
    $engine[$i] = [];
    for ($j = 0; $j < strlen(trim($data[$i])); $j++) {
        array_push($engine[$i], $data[$i][$j]);
    }
}

function surround($grid, $y, $x)
{
    return array(
        [$grid[$y - 1][$x - 1], $y - 1, $x - 1],
        [$grid[$y - 1][$x], $y - 1, $x],
        [$grid[$y - 1][$x + 1], $y - 1, $x + 1],
        [$grid[$y][$x + 1], $y, $x + 1],
        [$grid[$y + 1][$x + 1], $y + 1, $x + 1],
        [$grid[$y + 1][$x], $y + 1, $x],
        [$grid[$y + 1][$x - 1], $y + 1, $x - 1],
        [$grid[$y][$x - 1], $y, $x - 1]
    );
}

function numbers($grid, $y, $x, $counter, $addedNumbers, $score)
{
    $surroundings = surround($grid, $y, $x);
    $isGear = [];

    foreach ($surroundings as $point) {
        if (is_numeric($point[0])) {
            $number = $point[0];
            $posX = $point[2] - 1;
            $posY = $point[1];
            $firstX = $point[2];

            while ($posX >= 0 && is_numeric($grid[$posY][$posX])) {
                $number = $grid[$posY][$posX] . $number;
                $firstX = $posX;
                $posX--;
            }
            $posX = $point[2] + 1;

            while ($posX < sizeof($grid[$posY]) && is_numeric($grid[$posY][$posX])) {
                $number = $number . $grid[$posY][$posX];
                $posX++;
            }
            if (array_search([$number, $posY, $firstX], $addedNumbers) == false) {
                $counter += (int) $number;
                array_push($addedNumbers, [$number, $posY, $firstX]);
                array_push($isGear, $number);
            }
        }
    }
    if (sizeof($isGear) == 2) {
        $score += $isGear[0]*$isGear[1];
    }
    return [$counter, $addedNumbers, $score];
}



for ($j = 0; $j < sizeof($engine); $j++) {
    for ($i = 0; $i < sizeof($engine[$j]); $i++) {
        if ($engine[$j][$i] != '.' && !is_numeric($engine[$j][$i])) {
            $result = numbers($engine, $j, $i, $counter, $addedNumbers, $score);
            $counter = $result[0];
            $addedNumbers = $result[1];
            $score = $result[2];
        }
        
    }
}



?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Day 03 - Gears</title>
    </head>
    
    <body>
        <p>The answer we're looking for is: <?= $score ?> and the other one is: <?= $counter ?>.</p>
    </body>
    
    </html>
    
<?php 
    echo ("<pre style='display:flex;flex-direction:row;'>");
    // echo ("<div>");
    // print_r($data);
    // echo ("</div>");
    // echo ("<div>");
    // print_r($addedNumbers);
    // echo ("</div>");
    // echo ("<div>");
    // print_r(0);
    // echo ("</div>");
    // echo ("<div>");
    // print_r(0);
    // echo ("</div>");
    echo ("</pre>");

// 534357 too low
// 540810 too high