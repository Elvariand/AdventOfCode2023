<?php
include_once("inputs.php");
include_once("functions.php");

$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;

$abc = "abcdefghijklmnopqrstuvwxyz";

$data = explode(",", $data);

$arrayValue = [];
$boxes = [];

for ($i = 0; $i < 256; $i++) {
    $boxes[$i] = [];
}

for ($j = 0; $j < count($data); $j++) {
    $box = 0;
    $word = $data[$j];
    for ($i = 0; $i < strlen($word); $i++) {
        if (strchr($abc, $word[$i]) != false) {
            $box = hashing($word[$i], $box);
        } else if ($word[$i] == "=") {
            $boxes = equal(substr($word, 0, $i), substr($word, $i + 1), $box, $boxes);
            break;
        } else if ($word[$i] == "-") {
            $boxes = minus(substr($word, 0, $i), $box, $boxes);
            break;
        }
    }
}



$score = array_sum($arrayValue);
$counter = calculate($boxes);





function equal($letters, $numbers, $box, $boxes)
{
    $present = false;
    foreach ($boxes[$box] as $k => $lens) {
        if ($lens[0] == $letters) {
            $present = true;
            $key = $k;
        }
    }
    if ($present == true) {
        $boxes[$box][$key][1] = $numbers;
    } else {
        array_push($boxes[$box], [$letters, $numbers]);
    }
    return $boxes;
}

function minus($letters, $box, $boxes)
{
    $present = false;
    foreach ($boxes[$box] as $k => $lens) {
        if ($lens[0] == $letters) {
            $present = true;
            $key = $k;
        }
    }
    if ($present == true) {
        array_splice($boxes[$box], $key, 1);
        $boxes[$box] = array_values($boxes[$box]);
    }
    return $boxes;
}

function calculate($boxes) {
    $number = 0;
    for ($i=0; $i < count($boxes); $i++) { 
        for ($j=0; $j < count($boxes[$i]); $j++) { 
            $number += ($i+1)*($j+1)*($boxes[$i][$j][1]);
        }
    }
    return $number;
}

function hashing($letter, $value)
{
    return $value = (($value + ord($letter)) * 17) % 256;
}



echo '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Day 15 - Lenses</title>
</head>

<body>
<p>The answer we are looking for is: ' .  $score . ' and the other one is: ' . $counter . '.</p>
</body>

</html>';






// echo ("<pre style='display:flex;flex-direction:row;'>");
// view($boxes);
// echo ("</pre>");
