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

if ($argc == 2) {
    $message = $argv[1];
    $message = ft_split($message);
    if (count($message) === 0)
        exit();
    $size = count($message);
    $i = 0;

    foreach ($message as $key => $item) {
        echo "$item";
        if (++$i < $size)
            echo " ";
    }
    echo "\n";
}

