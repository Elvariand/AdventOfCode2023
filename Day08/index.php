<?php
include_once("inputs.php");
include_once("functions.php");
include_once("split.php");

// set_time_limit(7200);
// ini_set('memory_limit', '24G');

$score = 0;
$counter = 0;
// $data = $trial2;
// $directions = $trial2Dir;
$data = $input;

$data = explode("\n", $data);
$starts = [];
$ends = [];

for ($i = 0; $i < count($data); $i++) {
    $name = substr($data[$i], 0, 3);
    $$name = new Split($name, substr(strstr($data[$i], "("), 1, 3), substr(strstr($data[$i], ")", true), -3, 3));
    if ($name[2] === "A") array_push($starts, $$name);
    if ($name[2] === "Z") array_push($ends, $$name);
}

function instruction($letter, $name)
{
    if ($letter != "L" && $letter != "R") echo "Il y a un pbm avec la lettre : $letter <br>";
    $name = $letter === "L" ? $name->getLeft() : $name->getRight();
    return $name;
}


/* PART 1

AAA = 17287
GPA = 13771
GTA = 20803
VDA = 23147
BBA = 19631
VSA = 17873


*/
$name = $VSA;
for ($i=0; $i < strlen($directions) ; $i++) { 
    $score++;
    $name = ${instruction($directions[$i], $name)};
    if (array_search($name, $ends) !== false) {
        $counter++;
        if ($counter == 2) break;
    }
    if ($i == strlen($directions) -1 ) $i = -1;
}


/*

Brute force part 2



$counter = 22_442_000_000;
$starts = array(
    0 => $JSC,
    1 => $DCC,
    2 => $DRD,
    3 => $TCV,
    4 => $DPP,
    5 => $TQS
);

for ($i = 0; $i < strlen($directions); $i++) {
    $counter++;
    $good = 0;
    for ($j = 0; $j < count($starts); $j++) {
        $starts[$j] = ${instruction($directions[$i], $starts[$j])};
        if (array_search($starts[$j], $ends) !== false) $good++;
    }
    if ($counter > 1_256_000_000 && $counter % 1_000_000 == 0) {
        view($counter);
        view([$starts[0]->getName(), $starts[1]->getName(), $starts[2]->getName(), $starts[3]->getName(), $starts[4]->getName(), $starts[5]->getName()]);
    }
    // view("good = " . $good, true);
    if ($good === count($starts)) {
        break;
    } else if ($i == strlen($directions) - 1) $i = -1;
}

*/

echo '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Day 8 - Darude</title>
</head>

<body>
<p>The answer we are looking for is: ' .  $score . ' and the other one is: ' . $counter . '.</p>
</body>

</html>';






echo ("<pre style='display:flex;flex-direction:row;'>");
// echo ("<div>");
// print_r($starts);
// echo ("</div>");
// echo ("<div>");
// print_r($ends);
// echo ("</div>");
// echo ("<div>");
// print_r(0);
// echo ("</div>");
echo ("</pre>");



/*
lel             1 256 000 000 is too low




2471000000
Array
(
    [0] => FCB
    [1] => RCH
    [2] => CBP
    [3] => TVV
    [4] => QXK
    [5] => PXT
)




$counter = 22442000000;
$starts = array(
    0 => $JSC,
    1 => $DCC,
    2 => $DRD,
    3 => $TCV,
    4 => $DPP,
    5 => $TQS
);

*/