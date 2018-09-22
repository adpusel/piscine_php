#!/usr/bin/php
<?php

// je fais un strpos de tout les symbole == tab 1
// je fais un strpos de tout les symbole == tab 1
// je fais un strpos de tout les symbole == tab 1
// je dois comparrer les deux fonction une fois les groupe fais

function ft_split($str, $tab)
{
    $str = explode(' ', $str);
    foreach ($str as $key => $value) {
        if (empty($value) && $value != "0")
            unset($str[$key]);
    }
//    return array_merge($str, $tab);
}


function set_next_lettre($a, &$char_a, $b, &$char_b, &$i)
{
    $char_a = substr((string)$a, $i, 1);
    $char_b = substr((string)$b, $i, 1);
}


function diff($a, $b, &$char_a, &$char_b)
{
    $i = 0;
    set_next_lettre($a, $char_a, $b, $char_b, $i);
    while ($char_a === $char_b) {
        $i++;
        if (!boolval($char_a) && !boolval($char_b)
        && is_bool($char_a) && is_bool($char_b))
            break;
        set_next_lettre($a, $char_a, $b, $char_b, $i);
    }
}

function cmp($a, $b)
{
    $s = "abcdefghijklmnopqrstuvwxyz0123456789 !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

    diff($a, $b, $char_a, $char_b);
    $a = strpos($s, $char_a);
    $b = strpos($s, $char_b);
    return ($a < $b) ? -1 : 1;
}


function print_tab($tab)
{
    foreach ($tab as &$value) {
        echo "$value\n";
    }
}

if ($argc >= 2) {

    $tab = array();

    foreach ($argv as $key => $value) {
        if ($key > 0)
            $tab = ft_split($value, $tab);
    }
    usort($tab, "cmp");
    print_tab($tab);
}