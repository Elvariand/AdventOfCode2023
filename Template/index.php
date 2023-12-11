<?php
include_once("inputs.php");

$score = 0;
$counter = 0;
$data = $trial;
// $data = $input;

$data = explode("\n", $data);

for ($i=0; $i < count($data) ; $i++) { 
    $data[$i] = explode(" ", $data[$i]);
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
<p>The answer we are looking for is: ' .  $score . ' and the other one is: '. $counter . '.</p>
</body>

</html>';






echo ("<pre style='display:flex;flex-direction:row;'>");
echo ("<div>");
print_r($data);
echo ("</div>");
// echo ("<div>");
// print_r(0);
// echo ("</div>");
// echo ("<div>");
// print_r(0);
// echo ("</div>");
echo ("</pre>");