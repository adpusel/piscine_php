#!/usr/bin/php
<?php

include "../ex03/ft_split.php";

function print_tab($tab)
{
  foreach ($tab as &$value) {
	echo "$value\n";
  }
}

function cmp($str_1, $str_2)
{
  $s =
	"aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789 !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

  $i = 0;
  while (
	$i < strlen($str_1) &&
	$i < strlen($str_2) &&
	$str_1[$i] === $str_2[$i]) {
	$i++;
  }

  $str_1 = substr($str_1, $i);
  $str_2 = substr($str_2, $i);

  if ($str_1 === '') {
	return -1;
  }
  elseif ($str_2 === '') {
	return 1;
  }

  else {
	$char_1 = strpos($s, $str_1[0]);
	$char_2 = strpos($s, $str_2[0]);

	return ($char_1 < $char_2) ? -1 : 1;
  }
}

function ssap($argv)
{
  $tab = array();

  foreach ($argv as $key => $value) {
	if ($key > 0) {
	  $tmp_tab = ft_split($value);
	  $tab = array_merge($tab, $tmp_tab);
	}
  }
  return $tab;
}


if ($argc >= 2) {

  $tab = array();
  $tab = ssap($argv);
  usort($tab, "cmp");
  print_tab($tab);
}
