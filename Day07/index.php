<?php
include_once("inputs.php");
include_once("functions.php");

$score = 0;
$counter = 0;
// $data = $trial;
$data = $input;

$data = explode("\n", $data);

for ($i = 0; $i < count($data); $i++) {
    $data[$i] = explode(" ", $data[$i]);
}
$hands = $data;

$cardsOrder = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "T", "J", "Q", "K", "A"];
$cardsOrderPart2 = ["J", "1", "2", "3", "4", "5", "6", "7", "8", "9", "T", "Q", "K", "A"];

function handLevel($hand)
{
    $level = 0;
    $pair = "0";
    $triple = false;
    $done = ['J'];
    for ($i = 0; $i < strlen($hand); $i++) {
        if (array_search($hand[$i], $done) === false) {
            switch (substr_count($hand, $hand[$i])) {
                case 2:
                    if ($level == 1 && $pair != $hand[$i]) {
                        $level = 2;
                    } else if ($triple == true) {
                        $level = 4;
                    } else if ($level == 0) {
                        $level = 1;
                        $pair = $hand[$i];
                    }
                    array_push($done, $hand[$i]);
                    break;
                case 3:
                    if ($pair !== "0") {
                        $level = 4;
                        $triple = true;
                    } else {
                        $level = 3;
                        $triple = true;
                    }
                    array_push($done, $hand[$i]);
                    break;
                case 4:
                    $level = 5;
                    array_push($done, $hand[$i]);
                    break;
                case 5:
                    $level = 6;
                    array_push($done, $hand[$i]);
                default:
                    break;
            }
        }
    }
    switch (substr_count($hand, "J")) {
        case 1:
            if ($level == 0) {
                $level = 1;
            } else if ($level == 1) {
                $level = 3;
            } else if ($level == 2) {
                $level = 4;
            } else if ($level == 3) {
                $level = 5;
            } else if ($level == 5) {
                $level = 6;
            }
            break;
        case 2:
            if ($level == 0) {
                $level = 3;
            } else if ($level == 1) {
                $level = 5;
            } else if ($level == 3) {
                $level = 6;
            }
            break;
        case 3:
            if ($level == 0) {
                $level = 5;
            } else if ($level == 1) {
                $level = 6;
            }
            break;
        case 4:
        case 5:
            $level = 6;
            break;
    }
    return $level;
}

function compare($hand1, $hand2, $order)
{
    $result = 0;
    for ($i = 0; $i < strlen($hand1); $i++) {
        if ($hand1[$i] != $hand2[$i]) {
            $result = array_search($hand1[$i], $order) <=> array_search($hand2[$i], $order);
            break;
        }
    }
    return $result;
}

for ($i = 0; $i < count($hands); $i++) {
    array_push($hands[$i], handlevel($hands[$i][0]));
}
usort($hands, function ($hand1, $hand2) use ($cardsOrderPart2) {
    $result = 0;
    for ($i = 0; $i < strlen($hand1[0]); $i++) {
        if ($hand1[0][$i] != $hand2[0][$i]) {
            $result = array_search($hand1[0][$i], $cardsOrderPart2) <=> array_search($hand2[0][$i], $cardsOrderPart2);
            break;
        }
    }
    return $result;
});
usort($hands, fn ($a, $b) => $a[2] <=> $b[2]);

for ($i = 0; $i < count($hands); $i++) {
    array_push($hands[$i], $hands[$i][1] * ($i + 1));
    $score += $hands[$i][3];
}




//  251991728 too high
//  250702736 too low


// PART 2

// 249724977 too high
// 249440824 too high
// 249400220 good


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
echo ("<div>");
print_r($hands);
echo ("</div>");
// echo ("<div>");
// print_r(0);
// echo ("</div>");
// echo ("<div>");
// print_r(0);
// echo ("</div>");
echo ("</pre>");
