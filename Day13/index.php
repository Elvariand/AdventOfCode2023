<?php
include_once("inputs.php");
include_once("functions.php");

$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;

$data = explode("\n\r", $data);

for ($i = 0; $i < count($data); $i++) {
    $data[$i] = explode("\n", trim($data[$i]));
    for ($j = 0; $j < count($data[$i]); $j++) {
        $data[$i][$j] = trim($data[$i][$j]);
    }
}


function reflection($array)
{
    $length = sizeof($array);
    $half = ceil($length / 2);

    for ($i = 0; $i < $length - 1; $i++) {
        if ($compare = str_contains($array[$i], $array[$i + 1]) == true) {
            for ($j = 1; $j < $half + 1; $j++) {
                if (isset($array[$i - $j]) && isset($array[$i + $j + 1])) {
                    $compare = str_contains($array[$i - $j], $array[$i + $j + 1]);
                } else {
                    break;
                }
                if ($compare == false) {
                    break;
                }
            }
            if ($compare == true) {
                return ($i + 1) * 100;
            }
        }
    }
    // echo 'pas de symétrie horizontale trouvée.';
    $ninety = [];
    for ($i = 0; $i < strlen($array[0]); $i++) {
        $ninety[$i] = "";
        for ($j = 0; $j < $length; $j++) {
            $ninety[$i] .= trim($array[$j][$i]);
        }
    }
    return reflection($ninety) / 100;
}

function compare($str1, $str2)
{
    $length = strlen($str1);
    if ($length != strlen($str2)) {
        echo "error with $str1 and $str2";
        return;
    }
    $error = 0;
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] != $str2[$i]) $error++;
        if ($error > 1) break;
    }
    return $error;
}

function smudge($array)
{
    $length = sizeof($array);
    $half = ceil($length / 2);

    for ($i = 0; $i < $length - 1; $i++) {
        $error = compare($array[$i], $array[$i + 1]);
        if ( $error < 2) {
            for ($j = 1; $j < $half + 1; $j++) {
                if (isset($array[$i - $j]) && isset($array[$i + $j + 1])) {
                    $error += compare($array[$i - $j], $array[$i + $j + 1]);
                } else {
                    break;
                }
                if ($error > 1) {
                    break;
                }
            }
            if ($error == 1) {
                return ($i + 1) * 100;
            }
        }
    }
    // view("pas de symétrie horizontale trouvée. $array[0]");
    $ninety = [];
    for ($i = 0; $i < strlen($array[0]); $i++) {
        $ninety[$i] = "";
        for ($j = 0; $j < $length; $j++) {
            $ninety[$i] .= trim($array[$j][$i]);
        }
    }
    return smudge($ninety) / 100;
}




for ($i = 0; $i < count($data); $i++) {
    $score += reflection($data[$i]);
}
for ($i=0; $i < count($data); $i++) { 
    $result = smudge($data[$i]);
    // view("Pour le num $i , le résultat vaut $result");
    if ($result < 1) $result =0;
    $counter += $result ;
}

// $counter = smudge($data[1]);
// $score = reflection($data[0]);

echo '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Day 13 - Axis</title>
</head>

<body>
<p>The answer we are looking for is: ' .  $score . ' and the other one is: ' . $counter . '.</p>
</body>

</html>';






// echo ("<pre style='display:flex;flex-direction:row;'>");
// view($data);
// echo ("</pre>");
