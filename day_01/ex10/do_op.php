#!/usr/bin/php
<?php

if ($argc === 4) {
    $nb1 = trim($argv[1]);
    $op = trim($argv[2]);
    $nb2 = trim($argv[3]);
    if ($op === "+")
        $nb1 = $nb1 + $nb2;
    else if ($op === "-")
        $nb1 = $nb1 - $nb2;
    else if ($op === "/")
        $nb1 = $nb1 / $nb2;
    else if ($op === "*")
        $nb1 = $nb1 * $nb2;
    else if ($op === "%")
        $nb1 = $nb1 % $nb2;
    echo "$nb1\n";
} else
    echo "Incorrect Parameters\n";