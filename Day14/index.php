<?php
include_once("inputs.php");
include_once("functions.php");

$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;

$data = explode("\n", $data);
$grid = [];

for ($i = 0; $i < count($data); $i++) {
    $grid[$i] = [];
    $data[$i] = trim($data[$i]);
    for ($j = 0; $j < strlen($data[$i]); $j++) {
        $grid[$i][$j] = $data[$i][$j];
    }
}


function tiltNorth($grid)
{
    for ($i = 0; $i < count($grid); $i++) {
        for ($j = 0; $j < count($grid[$i]); $j++) {
            if ($grid[$i][$j] == "O") {
                for ($k = $i; $k >= 0; $k--) {
                    if ($grid[$k][$j] == ".") {
                        if ($k == 0) {
                            $grid[$k][$j] = "O";
                            $grid[$i][$j] = ".";
                            break;
                        }
                    } else if ($k < $i - 1) {
                        $grid[$k + 1][$j] = "O";
                        $grid[$i][$j] = ".";
                        break;
                    } else if ($k == $i - 1) {
                        break;
                    }
                }
            }
        }
    }
    return $grid;
}

function tiltSouth($grid)
{
    $length = count($grid);
    for ($i = $length-1; $i >= 0; $i--) {
        for ($j = 0; $j < count($grid[$i]); $j++) {
            if ($grid[$i][$j] == "O") {
                for ($k = $i; $k < $length; $k++) {
                    if ($grid[$k][$j] == ".") {
                        if ($k == $length - 1) {
                            $grid[$k][$j] = "O";
                            $grid[$i][$j] = ".";
                            break;
                        }
                    } else if ($k > $i + 1) {
                        $grid[$k - 1][$j] = "O";
                        $grid[$i][$j] = ".";
                        break;
                    } else if ($k == $i + 1) {
                        break;
                    }
                }
            }
        }
    }
    return $grid;
}

function tiltEast($grid)
{
    $length = count($grid);
    $width = count($grid[0]);
    for ($i = 0; $i < $length; $i++) {
        for ($j = $width-1; $j >= 0; $j--) {
            if ($grid[$i][$j] == "O") {
                for ($k = $j; $k < $width; $k++) {
                    if ($grid[$i][$k] == ".") {
                        if ($k == $width - 1) {
                            $grid[$i][$k] = "O";
                            $grid[$i][$j] = ".";
                            break;
                        }
                    } else if ($k > $j + 1) {
                        $grid[$i][$k - 1] = "O";
                        $grid[$i][$j] = ".";
                        break;
                    } else if ($k == $j + 1) {
                        break;
                    }
                }
            }
        }
    }
    return $grid;
}

function tiltWest($grid)
{
    $length = count($grid);
    $width = count($grid[0]);
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $width; $j++) {
            if ($grid[$i][$j] == "O") {
                for ($k = $j; $k >= 0; $k--) {
                    if ($grid[$i][$k] == ".") {
                        if ($k == 0) {
                            $grid[$i][$k] = "O";
                            $grid[$i][$j] = ".";
                            break;
                        }
                    } else if ($k < $j - 1) {
                        $grid[$i][$k + 1] = "O";
                        $grid[$i][$j] = ".";
                        break;
                    } else if ($k == $j - 1) {
                        break;
                    }
                }
            }
        }
    }
    return $grid;
}

for ($i=0; $i < 10_000; $i++) { 
    $grid = tiltEast(tiltSouth(tiltWest(tiltNorth($grid))));
}


$show = [];
for ($i = 0; $i < count($grid); $i++) {
    $show[$i] = "";
    for ($j = 0; $j < count($grid[$i]); $j++) {
        $show[$i] .= $grid[$i][$j];
    }
}

$nRow = 0;
for ($i = count($show) - 1; $i >= 0; $i--) {
    $nRow++;
    $counter += substr_count($show[$i], "O") * $nRow;
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
// view($data);
view($show);
echo ("</pre>");
