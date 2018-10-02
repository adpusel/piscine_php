#!/usr/bin/php
<?php

function delete_empty($value)
{
    return $value !== "";
}

function ft_split($tab)
{
    $tab = explode(" ", $tab);

    $tab = array_filter($tab, "delete_empty");
    return $tab;
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
