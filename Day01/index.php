<?php
include_once("inputs.php");

// $data = $trial2;
$data = $input;

$letters = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
$letters2 = ["oonee", "ttwoo", "tthreee", "ffourr", "ffivee", "ssixx", "ssevenn", "eeightt", "nninee"];
$numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];

foreach ($letters as $key => $value) {
    $data = str_replace($value, $numbers[$key],str_replace($value, $letters2[$key], $data));
}

$data = preg_replace('/[a-z]/',"",$data);
$data = explode("\n", $data);

$arrayDuo = [];
$score = 0;

foreach ($data as $row) {
    $row = trim($row);

    $uno = (int)substr($row,0,1);
    $dos = (int)substr($row,strlen($row)-1,1);
    array_push($arrayDuo,"$uno $dos");

    $score += $uno*10 + $dos;
}

echo("<pre style='display:flex;flex-direction:row;'>");
echo("<div>");
print_r(explode("\n", $input));
echo("</div>");
echo("<div>");
print_r($data);
echo("</div>");
echo("<div>");
print_r($arrayDuo);
echo("</div>");
echo("<div>");
print_r($score);
echo("</div>");
echo("</pre>");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 01 - Trebuchet</title>
</head>
<body>
    <p>The answer we're looking for is: <span id="answer"><?= $score ?></span> and the other one is: <span id="answer2">###</span>.</p>
</body>
</html>

<!-- 53941 too low -->
<!-- 54006 too low -->