#!/usr/bin/php
<?php

include "../ex03/ft_split.php";

if ($argc >= 2) {
    $rot = $argv[1];

    $rot = ft_split($rot);
    if(count($rot) === 0)
        exit;
    echo  count($rot);
    if (count($rot) > 1) {

        array_push($rot, array_shift($rot));
    }
    echo implode(" ", $rot);
    echo "\n";
}