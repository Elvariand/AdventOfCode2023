<?php
include_once("inputs.php");
include_once("functions.php");

$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;

$data = explode("\n", $data);

for ($i = 0; $i < count($data); $i++) {
    $data[$i] = explode(" ", $data[$i]);
}

function difference($array)
{
    $newArray = [];
    $zero = true;
    for ($i = 1; $i < count($array); $i++) {
        array_push($newArray, $array[$i] - $array[$i - 1]);
    }
    foreach ($newArray as $value) {
        if ($value !== 0) {
            $zero = false;
            break;
        }
    }
    return $zero == true ? [0] : $newArray;
}

function extrapolate($arrayInf, $arraySup)
{
    return end($arrayInf) + end($arraySup);
}

function intrapolate($arrayInf, $arraySup)
{
    return $arraySup[0] - $arrayInf[0];
}

$arrayWork = [];

foreach ($data as $row) {
    array_push($arrayWork, [$row]);
}

$arrayExtra = [];
$arrayIntra = [];

for ($j = 0; $j < count($arrayWork); $j++) {

    for ($i = 0; $i < count($arrayWork[$j]); $i++) {
        $newArray = difference($arrayWork[$j][$i]);
        array_push($arrayWork[$j], $newArray);
        if ($newArray === [0]) {
            break;
        }
    }

    for ($i = count($arrayWork[$j]) - 1; $i > 0; $i--) {
        $extrapolation = extrapolate($arrayWork[$j][$i], $arrayWork[$j][$i - 1]);
        $intrapolation = intrapolate($arrayWork[$j][$i], $arrayWork[$j][$i - 1]);
        array_push($arrayWork[$j][$i - 1], $extrapolation);
        array_splice($arrayWork[$j][$i - 1], 0, 0, $intrapolation);
        if ($i === 1) {
            array_push($arrayExtra, $extrapolation);
            array_push($arrayIntra, $intrapolation);
        }
    }
}

$score = array_sum($arrayExtra);
$counter = array_sum($arrayIntra);

echo '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Day 09 - Oasis</title>
</head>

<body>
<p>The answer we are looking for is: ' .  $score . ' and the other one is: ' . $counter . '.</p>
</body>

</html>';






echo ("<pre style='display:flex;flex-direction:row;'>");
// view($data);
// view($arrayWork);
echo ("</pre>");
