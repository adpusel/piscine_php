#!/usr/bin/php
<?php

include "../ex03/ft_split.php";

if ($argc >= 2) {
    $tab = array();

    foreach ($argv as $key => $value) {
        if ($key > 0)
        {
            $tmp_tab = ft_split($value);
            $tab = array_merge($tab, $tmp_tab);
        }
    }
    sort($tab);

    foreach ($tab as &$value) {
        echo "$value\n";
    }
}