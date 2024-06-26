<?php

include_once("inputs.php");
include_once("functions.php");


// $file = $input;
// $data = $trial;
$data = $input;
$sum = 0;

$data = explode("\n", $data);


for ($i = 0; $i < count($data); $i++) {
    $line = trim($data[$i]);
    $parts = explode(' ', $line);
    if (count($parts) !== 2)
        continue;
    $springs = $parts[0];
    $springs = "$springs?$springs?$springs?$springs?$springs";
    $damaged = getNumbers($parts[1], ',');
    $damaged = array_merge($damaged, $damaged, $damaged, $damaged, $damaged);
    $cPossibles = getPossiblesCount($springs, null, ...$damaged);
    $sum += $cPossibles;
    print("$cPossibles\t - $sum\n<br>");
}

global $cache;
$cache = [];

function getPossiblesCount(string $springs, ?int $remaining = null, int ...$damaged): int
{
    global $cache;
    $key = $springs . '-' . join('-', $damaged);
    if (isset($cache[$key])) {
        return $cache[$key];
    }
    $d = array_shift($damaged);
    if ($d === null || $d < 1) {
        $index = stripos($springs, '#');
        if ($index !== false)
            return 0;
        return 1;
    }

    if ($remaining === null) {
        $remaining = 0;
        foreach ($damaged as $i)
            $remaining += $i;
    } else {
        $remaining -= $d;
    }

    $sSprings = strlen($springs);
    $possibles = 0;
    $iMax = $sSprings - $d - $remaining + 1;
    for ($i = 0; $i < $iMax; ++$i) {
        if ($springs[$i] === '#')
            $iMax = min($i + 1, $iMax);
        $ok = $i + $d === $sSprings || $springs[$i + $d] === '.' || $springs[$i + $d] === '?';
        $ok &= $i === 0 || $springs[$i - 1] === '.' || $springs[$i - 1] === '?';

        for ($j = $i; $j < $sSprings && $j < $i + $d && $ok; ++$j) {

            if ($springs[$j] !== '?' && $springs[$j] !== '#')
                $ok = false;
        }
        if ($ok) {
            if ($i + $d === $sSprings) {
                $possibles += 1;
            } else {
                $subSprings = substr($springs, $i + $d + 1);
                $subPossibles = getPossiblesCount($subSprings, $remaining, ...$damaged);
                $possibles += $subPossibles;
            }
        }
    }
    $cache[$key] = $possibles;
    return $possibles;
}

function getNumbers(string $str, string $separator = ' '): array
{
    $numbers = [];
    $parts = explode($separator, $str);
    foreach ($parts as $part) {
        $part = trim($part);
        if (strlen($part) > 0 && is_numeric($part))
            $numbers[] = intval($part);
    }
    return $numbers;
}
