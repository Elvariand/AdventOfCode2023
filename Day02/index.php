<?php
include_once("inputs.php");

// $data = $trial;
$data = $input;

$data = explode("\n", $data);
$score = 0;
$power = 0;

for ($i = 0; $i < sizeof($data); $i++) {

    $red = [];
    $green = [];
    $blue = [];
    $data[$i] = explode(":", $data[$i]);

    for ($j = 0; $j < sizeof($data[$i]); $j++) {

        $data[$i][$j] = explode(";", $data[$i][$j]);

        for ($k = 0; $k < sizeof($data[$i][$j]); $k++) {

            $data[$i][$j][$k] = explode(",", $data[$i][$j][$k]);

            for ($l = 0; $l < sizeof($data[$i][$j][$k]); $l++) {

                $data[$i][$j][$k][$l] = explode(" ", trim($data[$i][$j][$k][$l]));

                switch ($data[$i][$j][$k][$l][1]) {
                    case 'red':
                        $data[$i][$j][$k][$l][0] <= 12 ? $result = true : array_push($data[$i][0][0][0], "bad");
                        array_push($red, (int) $data[$i][$j][$k][$l][0]);
                        break;
                    case 'green':
                        $data[$i][$j][$k][$l][0] <= 13 ? $result = true : array_push($data[$i][0][0][0], "bad");
                        array_push($green, (int) $data[$i][$j][$k][$l][0]);
                        break;
                    case 'blue':
                        $data[$i][$j][$k][$l][0] <= 14 ? $result = true : array_push($data[$i][0][0][0], "bad");
                        array_push($blue, (int) $data[$i][$j][$k][$l][0]);
                        break;
                    default:
                        if ($data[$i][$j][$k][$l][0] != 'Game') {
                            echo ("<pre>");
                            print_r("<p> il y a un soucis</p>");
                            print_r($i);
                            print_r($data[$i][$j][$k]);
                            echo ("</pre>");
                        }
                        break;
                }
            }
        }
    }
    $maxRed = max($red);
    $maxGreen = max($green);
    $maxBlue = max($blue);
    $power += $maxRed * $maxGreen * $maxBlue;
    (isset($data[$i][0][0][0][2])) ? null : $score += $data[$i][0][0][0][1];
}



echo ("<pre style='display:flex;flex-direction:row;'>");
// echo ("<div>");
// print_r($data);
// echo ("</div>");
// echo ("<div>");
// print_r($data);
// echo ("</div>");
// echo ("<div>");
// print_r(0);
// echo ("</div>");
// echo ("<div>");
// print_r(0);
// echo ("</div>");
echo ("</pre>");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 02 - Cubes</title>
</head>

<body>
    <p>The answer we're looking for is: <?= $score ?> and the other one is: <?= $power ?>.</p>
</body>

</html>