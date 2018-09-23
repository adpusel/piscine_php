#!/usr/bin/php
<?php

include "../ex03/ft_split.php";

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
