#!/usr/bin/php
<?php


function delete_empty($value)
{
  return $value !== "";
}

if ($argc >= 2) {
  $line = $argv[1];

  $tab = explode(' ', $line);

  if (count($tab) > 0) {

	$tab = array_filter($tab, "delete_empty");

	if (count($tab) > 1) {
	  array_push($tab, array_shift($tab));
	}

	echo implode(" ", $tab);
  }

  echo "\n";
}