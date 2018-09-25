#!/usr/bin/php
<?php

print_r($argv);
function for_return($s)
{
  $s = ltrim($s, '0');
  $nb1 = intval($s);
  $s = substr($s, strlen($nb1));

  $op = $s[0];
  $s = substr($s, 1);

  $nb2 = intval($s);

  if ($nb2 === 0 && ($op === '/' || $op === '%')) {
	echo "Syntax Error\n";
	return;
  }

  if ($op === "+") {
	$nb1 = $nb1 + $nb2;
  }
  else if ($op === "-") {
	$nb1 = $nb1 - $nb2;
  }
  else if ($op === "/") {
	$nb1 = $nb1 / $nb2;
  }
  else if ($op === "*") {
	$nb1 = $nb1 * $nb2;
  }
  else if ($op === "%") {
	$nb1 = $nb1 % $nb2;
  }
  else {
	echo "Syntax Error\n";
	return;
  }
  echo "$nb1\n";
}

if ($argc === 2) {

  $s = str_replace(" ", "", $argv[1]);
  for_return($s);
}
else {
  echo "Incorrect Parameters\n";
}