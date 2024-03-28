<?php
include_once("inputs.php");
include_once("functions.php");
include_once("contraption.php");


$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;

$data = explode("\n", $data);
$grid = [];
$energies = [];

for ($i = 0; $i < count($data); $i++) {
    $grid[$i] = [];
    for ($j = 0; $j < strlen(trim($data[$i])); $j++) {
        $grid[$i][$j] = new Contraption($j, $i, trim($data[$i][$j]));
    }
}

for ($i = 0; $i < count($grid); $i++) {
    for ($j = 0; $j < count($grid[$i]); $j++) {
        resetEnergy($grid);
        if ($i == 0) {
            if ($j == 0) {
                $origin = new Contraption(-1, 0, ".");
                $grid[$i][$j]->setLightFrom([$origin]);
                $queue = [$grid[$i][$j]];
                array_push($energies,beam($queue, $grid));
            }
            if ($j == count($grid[$i]) - 1) {
                $origin = new Contraption(count($grid[$i]), 0, ".");
                $grid[$i][$j]->setLightFrom([$origin]);
                $queue = [$grid[$i][$j]];
                array_push($energies,beam($queue, $grid));
            }
            $origin = new Contraption($j, -1, ".");

        } else if ($j == 0) {
            $origin = new Contraption(-1, $i, ".");
        } else if ($i == count($grid) - 1) {
            if ($j == 0) {
                $origin = new Contraption(-1, $i, ".");
                $grid[$i][$j]->setLightFrom([$origin]);
                $queue = [$grid[$i][$j]];
                array_push($energies,beam($queue, $grid));
            }
            if ($j == count($grid[$i]) - 1) {
                $origin = new Contraption(count($grid[$i]), $i, ".");
                $grid[$i][$j]->setLightFrom([$origin]);
                $queue = [$grid[$i][$j]];
                array_push($energies,beam($queue, $grid));
            }
            $origin = new Contraption($j, count($grid), ".");
        } else if ($j == count($grid[$i]) - 1) {
            $origin = new Contraption(count($grid[$i]), $i, ".");
        } else {
            continue;
        }
        $grid[$i][$j]->setLightFrom([$origin]);
        $queue = [$grid[$i][$j]];
        array_push($energies,beam($queue, $grid));
    }
}
$counter = max($energies);
view($energies);

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

function resetEnergy($grid)
{
    for ($i = 0; $i < count($grid); $i++) {
        for ($j = 0; $j < count($grid[$i]); $j++) {
            $grid[$i][$j]->setEnergized(false);
        }
    }
}
function getEnergized($grid)
{
    $count = 0;
    for ($i = 0; $i < count($grid); $i++) {
        for ($j = 0; $j < count($grid[$i]); $j++) {
            if ($grid[$i][$j]->getEnergized() == true) {
                $count++;
            }
        }
    }
    return $count;
}

function beam($queue, $grid) {
    $number = 0;
    while (count($queue) > 0 && $number < 15000) {
        $number++;
        $destinations = array_shift($queue)->bounce($grid);
        foreach ($destinations as $destination) {
            array_push($queue, $destination);
        }
        $queue = array_unique($queue, SORT_REGULAR);
    }
    return getEnergized($grid);
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