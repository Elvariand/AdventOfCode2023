<?php
include_once("inputs.php");
include_once("functions.php");

ini_set('memory_limit','16G');
set_time_limit(600);
define(PHP_INT_SIZE,128);

$score = 0;
$counter = 0;
$data = $trial;
// $data = $input;

$data = explode("\n", $data);

for ($i = 0; $i < count($data); $i++) {
    $data[$i] = explode(" ", $data[$i]);
    $data[$i][1] = explode(",", $data[$i][1]);
}

function bruteForce($str, $array)
{
    $possibilities = [];
    $tries = [];
    $baseStr = $str;
    $max = substr_count($str, "?");
    $pwr = pow(2, $max);
    while (count($tries) < $pwr) {
        $n = 0;
        $hash = 0;
        $compare = [];
        $str = $baseStr;
        $binary = decbin(count($tries));
        for ($j = strlen($binary); $j < $max; $j++) {
            $binary = "0" . $binary;
        }
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == "?") {
                $str[$i] = $binary[$n] == 0 ? "#" : ".";
                $n++;
            }
            if ($n == $max) break;
        }
        array_push($tries, "O");
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == "#") {
                $hash++;
            }
            if ($str[$i] == "." || $i == strlen($str) - 1) {
                if ($hash != 0) {
                    array_push($compare, $hash);
                    $hash = 0;
                }
            }
        }
        if ($compare == $array) {
            array_push($possibilities, $str);
        }
    }
    return $possibilities;
}

$size = count($data);

for ($j = 1; $j < 2; $j++) {
    for ($i = 0; $i < $size; $i++) {
        $row = $data[$i][0];
        $row2 = $data[$i][1];
        for ($k = 0; $k < $j; $k++) {
            $row .= "?" . $row;
            foreach ($row2 as $value) {
                array_push($row2, $value);
            }
        }
        array_push($data, [$row,$row2]);
    }
}

$toExtrapole = [];
for ($i=0; $i < count($data); $i++) { 
    $j = $i%count($data);
    $possible = bruteForce($data[$i][0], $data[$i][1]);
    $numPos = count($possible);
    if (!isset($toExtrapole[$j])) $toExtrapole[$j] = [];
    array_push($toExtrapole[$j],$numPos);
    $score += count($possible);
}





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
view($toExtrapole);
echo ("</pre>");
