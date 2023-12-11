<?php
include_once("inputs.php");

$score = 0;
$counter = 198;

// $data = $trial;
$data = $input;

$data = explode("\n", $data);

for ($i = 0; $i < sizeof($data); $i++) {
    $twoPoints = strpos($data[$i], ':');
    $separator = strpos($data[$i], '|');
    $cardName = explode(" ", strchr($data[$i], ':', true));
    $data[$i] = [end($cardName), array_filter(explode(" ", substr($data[$i], $twoPoints + 1, $separator - $twoPoints - 1))), array_filter(explode(" ", substr($data[$i], $separator + 1)))];
}



function winning($card, $input)
{

    $arrayWinners = $card[1];
    $arrayNumbers = $card[2];
    $pos = array_search($card, $input);
    $match = 0;
    $power = 0;

    if (!isset($copyCard[3])) {
        foreach ($arrayNumbers as $scratched) {
            if (array_search($scratched, $arrayWinners)) {
                $match++;
            }
        }
    }
    $power = $match == 0 ? 0 : pow(2, $match - 1);

    $card[3] = $match;
    $card[4] = [];
    $card[5] = $match;
    for ($i = 0; $i < $match; $i++) {
        array_push($card[4], (int) $card[0] + $i);
    }
    $input[$pos] = $card;
    return [$power, $input];
}



$queue = [];

for ($i = sizeof($data) - 1; $i >= 0; $i--) {
    $result = winning($data[$i], $data);
    $score += $result[0];
    $data = $result[1];
    if ($data[$i][3] != 0) {
        for ($j = 1; $j <= sizeof($data[$i][4]); $j++) {
            $data[$i][5] += $data[$i + $j][5];
        }
    }
    $counter+=$data[$i][5];
}


echo ("<pre style='display:flex;flex-direction:row;'>");
// echo ("<div>");
// print_r(array_slice($data, 0));
// echo ("</div>");
// echo ("<div>");
// print_r(array_slice($queue,0,10));
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
    <title>Day 04 - Scratchcards</title>
</head>

<body>
    <p>The answer we're looking for is: <?= $score ?> and the other one is: <?= $counter ?>.</p>
</body>

</html>


<!-- 33698 too high -->

<!-- 4060224 too low // part 2 -->
<!-- 4060422 too low // part 2 -->

<!-- 13768818 is good -->