<?php
/**
 * User: adpusel
 * Date: 24/09/2018
 * Time: 07:57
 */

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

if ($argc >= 2) {

  $line = $argv[1];
  $line = str_replace("\t", " ", $line);

  $tab = ft_split($line);
  print_r($tab);

  $line = implode(" ", $tab);
  echo "$line\n";
}

