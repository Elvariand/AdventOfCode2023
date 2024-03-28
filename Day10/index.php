<?php
include_once("inputs.php");
include_once("functions.php");
include_once("pipe.php");

$score = 0;
$counter = 0;
// $data = $trial2;
$data = $input;

$data = explode("\n", $data);
$pipesGrid = [];

for ($i = 0; $i < count($data); $i++) {
    $pipesGrid[$i] = [];
    for ($j = 0; $j < strlen($data[$i]); $j++) {
        $pipesGrid[$i][$j] = new Pipe($j, $i, $data[$i][$j]);
        if ($pipesGrid[$i][$j]->getForm() == "S") {
            $start = $pipesGrid[$i][$j];
            $Sy = $i;
            $Sx = $j;
            // view("je proc");
        }
    }
}

function traduction($grid, $pipe)
{
    $x = $pipe->getX();
    $y = $pipe->getY();
    $array = [];
    switch ($pipe->getConnect1()) {
        case 'top':
            array_push($array, $grid[$y - 1][$x]);
            $grid[$y - 1][$x]->setConnectedFrom('bottom');
            break;
        case 'right':
            array_push($array, $grid[$y][$x + 1]);
            $grid[$y][$x + 1]->setConnectedFrom('left');
            break;
        case 'bottom':
            array_push($array, $grid[$y + 1][$x]);
            $grid[$y + 1][$x]->setConnectedFrom('top');
            break;
        case 'left':
            array_push($array, $grid[$y][$x - 1]);
            $grid[$y][$x - 1]->setConnectedFrom('right');
            break;

        default:
            break;
    }
    switch ($pipe->getConnect2()) {
        case 'top':
            array_push($array, $grid[$y - 1][$x]);
            $grid[$y - 1][$x]->setConnectedFrom('bottom');
            break;
        case 'right':
            array_push($array, $grid[$y][$x + 1]);
            $grid[$y][$x + 1]->setConnectedFrom('left');
            break;
        case 'bottom':
            array_push($array, $grid[$y + 1][$x]);
            $grid[$y + 1][$x]->setConnectedFrom('top');
            break;
        case 'left':
            array_push($array, $grid[$y][$x - 1]);
            $grid[$y][$x - 1]->setConnectedFrom('right');
            break;

        default:
            break;
    }
    return $array;
}

function expand($grid, $pipe, $maxDist)
{
    $pipe->setDone(true);
    $connections = traduction($grid, $pipe);
    if ($pipe->getForm() === "S") {
        // view("j\'ai proc");
        // view($pipe, true);
        $connections[0]->setDistanceFromS($pipe->getDistanceFromS() + 1);
        $connections[1]->setDistanceFromS($pipe->getDistanceFromS() + 1);
        return [$connections, 0];
    } else {
        $next = $connections[0]->getDone() === false ? $connections[0] : $connections[1];
        if ($next->getDistanceFromS() == 0) {
            $maxDist = $pipe->getDistanceFromS() + 1;
            $next->setDistanceFromS($maxDist);
        } else {
            $maxDist = $pipe->getDistanceFromS() + 1;
            return [$next, $maxDist];
        }
    }
    return [$next, 0];
}

$point = [$start];

while ($score == 0 && $counter < 10000) {
    $newPoint = [];
    foreach ($point as $pipe) {
        $expansion = expand($pipesGrid, $pipe, $score);
        array_push($newPoint, $expansion[0]);
    }
    $point = is_array($newPoint) ? (is_array($newPoint[0]) ? $newPoint[0] : $newPoint) : [$newPoint];
    // view($point);
    $score = $expansion[1];
    // view($score);
    $counter++;
}



$show = [];

for ($i = 0; $i < count($pipesGrid); $i++) {
    $show[$i] = [];
    for ($j = 0; $j < count($pipesGrid[$i]); $j++) {
        $form = $pipesGrid[$i][$j]->getForm();
        if ($pipesGrid[$i][$j]->getDone() === true) {
            switch ($form) {
                case 'F':
                    $form = "┌";
                    break;
                case 'J':
                    $form = "┘";
                    break;
                case '7':
                    $form = "┐";
                    break;
                case 'L':
                    $form = "└";
                    break;
                case '-':
                    $form = "─";
                    break;
                case '|':
                    $form = "│";
                    break;
                
                default:
                    break;
            }
            $show[$i][$j] = "<b style='color:red'>$form</b>";
        } else {
            $show[$i][$j] = "o";
        }
    }
    if ($i < 10) {
        array_splice($show[$i],0,0,"o");
    }
    $show[$i] = implode("", $show[$i]);
}
$show[$Sy] = str_replace("<b style='color:red'>S</b>","<b style='color:green'>│</b>",$show[$Sy]);


echo '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Day 10 - Mario & Luigi</title>
</head>

<body>
<p>The answer we are looking for is: ' .  $score . ' and the other one is: ' . $counter . '.</p>
</body>

</html>';






echo ("<pre style='display:flex;flex-direction:row;'>");
// view($pipesGrid);
view($show);
echo ("</pre>");
