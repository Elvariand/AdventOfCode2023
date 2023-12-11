<?php
include_once("inputs.php");
include_once("functions.php");

ini_set('memory_limit','-1');

$score = 1;
$counter = 0;
// $data = $trial;
$data = $input;

$data = explode("\n", $data);

for ($i = 0; $i < sizeof($data); $i++) {
    $packed = "";
    $data[$i] = trim(substr(strrchr($data[$i], ":"), 1));
    $data[$i] = array_values(array_filter(explode(" ", $data[$i])));
    for ($j = 0; $j < count($data[$i]); $j++) {
        $packed .= $data[$i][$j];
    }
    $data[$i] = (int)$packed;
}


function estimate($duration)
{
    $possibilities = [];
    for ($i = 0; $i <= $duration; $i++) {
        $possibilities[$i] = $i * ($duration - $i);
    }
    return $possibilities;
}
function short($duration, $record)
{
    $possibilities = [];
    for ($i = 0; $i <= $duration; $i++) {
        $possibilities[$i] = $i * ($duration - $i);
        if ($possibilities[$i] > $record) break;
    }
    return $possibilities;
}

$results = [];

// $results = estimate($data[0]);
// $min = $data[1];
// $filtered = array_filter($results, function ($v) use ($min) {
//     return $v > $min;
// });
// $score *= count($filtered);
// array_push($test, $filtered);

$result = short($data[0], $data[1]);
$counter = $data[0] -2*(count($result)-1) +1;


echo '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Day 06 - Legen...</title>
</head>

<body>
<p>The answer we are looking for is: ' .  $score . ' and the other one is: ' . $counter . '.</p>
</body>

</html>';


echo ("<pre style='display:flex;flex-direction:row;justify-content: space-evenly;'>");
echo ("<div>");
print_r($data);
echo ("</div>");
echo ("<div>");
print_r(array_slice($result, -20, 50,true));
echo ("</div>");
// echo ("<div>");
// print_r($filtered);
// echo '<br>';
// echo (count($filtered));
// echo ("</div>");
// echo ("<div>");
// print_r(0);
// echo ("</div>");
echo ("</pre>");
