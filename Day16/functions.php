<?php

function view($variable, $br = false) {
    if ($br) echo('<br/>');
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
    if ($br) echo('<br/>');
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

// function red(input, posX, posY) {
//     if (input[posY] == undefined) {
//     console.log("pbm avec " + posX + "/" + posY);
//     return }

//     input[posY][posX] = `<span style='color:red'>${input[posY][posX]}</span>`
// }
// function green(input, posX, posY) {
//     input[posY][posX] = `<span style='color:green'>${input[posY][posX]}</span>`
// }
// function blue(input, posX, posY) {
//     input[posY][posX] = `<span style='color:blue'>${input[posY][posX]}</span>`
// }