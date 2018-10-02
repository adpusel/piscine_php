#!/usr/bin/php
<?PHP

function add_key($s, &$tab)
{
  $s = explode(':', $s);
  $tab[$s[0]] = $s[1];
}

if ($argc >= 2) {
  $tab = array();
  foreach ($argv as $key => $item) {
	if ($key > 1) {
	  add_key($argv[$key], $tab);
	}
  }
  if (array_key_exists($argv[1], $tab)) {
	echo $tab[$argv[1]]. "\n";
  }
}