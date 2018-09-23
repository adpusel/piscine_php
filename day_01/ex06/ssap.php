<?php

include "../ex03/ft_split.php";


function ft_split($str, $tab)
{
    $str = explode(' ', $str);
    foreach ($str as $key => $value) {
        if (empty($value) && $value != "0")
            unset($str[$key]);
    }
    return array_merge($str, $tab);
}

if ($argc >= 2) {
    $tab = array();

    foreach ($argv as $key => $value) {
        if ($key > 0)
            $tab = ft_split($value, $tab);
    }
    sort($tab);

    foreach ($tab as &$value) {
        echo "$value\n";
    }
}