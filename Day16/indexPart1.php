<?php
include_once("inputs.php");
include_once("functions.php");
include_once("contraption.php");

ini_set('memory_limit','1024M');

$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;

$data = explode("\n", $data);
$grid = [];

for ($i = 0; $i < count($data); $i++) {
    $grid[$i] = [];
    for ($j = 0; $j < strlen(trim($data[$i])); $j++) {
        $grid[$i][$j] = new Contraption($j, $i, trim($data[$i][$j]));
    }
}
$origin = new Contraption(-1, 0, ".");
$grid[0][0]->setLightFrom([$origin]);

$queue = [$grid[0][0]];
$read = [[$grid[0][0]->getForm(),$grid[0][0]->getY(),$grid[0][0]->getX()]];

while (count($queue) > 0 && $counter < 15000) {
    $counter++;
    $destinations = array_shift($queue)->bounce($grid);
    array_shift($read);
    if($counter == 7060) {
        array_push($queue, $grid[35][70]);
    }
    // view($destinations);
    foreach ($destinations as $destination) {
        array_push($queue, $destination);
        array_push($read, [$destination->getForm(),$destination->getY(),$destination->getX(), $destination->getEnergized()]);
    }
    $queue = array_unique($queue,SORT_REGULAR);
    // view($read);
}

$show = [];
for ($i = 0; $i < count($grid); $i++) {
    $show[$i] = "";
    if ($i < 10) $show[$i] .= ".";
    if ($i < 100) $show[$i] .= ".";
    for ($j = 0; $j < count($grid[$i]); $j++) {
        $show[$i] .= $grid[$i][$j]->getEnergized() == true ? "<b><span style='color:red'>" . $grid[$i][$j]->getForm() . "</span></b>" : $grid[$i][$j]->getForm();
        if ($grid[$i][$j]->getEnergized() == true) {
            $score++;
        }
    }
}



echo ("</pre>");

echo '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Day 16 - Mirrors</title>
</head>

<body>
<p>The answer we are looking for is: ' .  $score . ' and the other one is: ' . $counter . '.</p>
</body>

</html>';







echo ("<pre style='display:flex;flex-direction:row;'>");
view($show);
echo ("</pre>");



// 6668  too low
// 7060 is good