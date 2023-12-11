<?php

function view($variable, $br = false) {
    if ($br) echo('br');
    echo '<pre>';
    echo "La variable vaut : <br>";
    print_r($variable);
    echo '</pre>';
    if ($br) echo('br');
}