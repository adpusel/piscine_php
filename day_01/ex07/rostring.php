#!/usr/bin/php
<?php

function ft_split($str)
{
    $str = explode(' ', $str);

    foreach ($str as $key => $value) {
        if (empty($value) && $value != "0")
            unset($str[$key]);
    }
    return $str;
}

if ($argc >= 2) {
    $rot = $argv[1];

    $rot = ft_split($rot);
    if(count($rot) === 0)
        exit;
    if (count($rot) > 1) {
        array_push($rot, array_shift($rot));
    }
    echo implode(" ", $rot);
    echo "\n";
}