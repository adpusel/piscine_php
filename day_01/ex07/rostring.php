#!/usr/bin/php
<?php

$delete_empty = function($value)
{
  return $value !== "";
};

if ($argc >= 2) {
  $rot = $argv[1];

  $rot = explode(" \t", $str);
  if (count($rot) === 0) {
	exit;
  }
  array_filter($linksArray, "delete_empty");
  if (count($rot) > 1) {
	array_push($rot, array_shift($rot));
  }
  echo implode(" ", $rot);
  echo "\n";
}