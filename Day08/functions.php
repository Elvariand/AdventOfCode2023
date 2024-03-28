<?php

function view($variable, $br = false) {
    if ($br) echo('<br>');
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
    if ($br) echo('<br>');
}

function LCM($array) {
    $max = max($array);
    while(1) {
    $count = 0;
        foreach ($array as $number) {
            if ($max%$number === 0) $count++;
        }
        if($count == count($array)) {
            break;
        }
        ++$max;
    }
    return $max;
}