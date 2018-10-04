#!/usr/bin/php
<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 11:44
 */
 

$tab_dico = false;
$header = false;

if ($argc != 3 || file_exists($argv[1]) === false)
    exit();

if (($handle = fopen($argv[1], "r")) !== FALSE) {

  while (($line = fgetcsv($handle, 1000, ";")) !== FALSE) {

    // init les tab et check le header
    if ($tab_dico === false)
	{

	  $tab_dico = $line;
	  foreach ($tab_dico as $index => $item)
	  {
		if ($item === $argv[2])
		    $header = $index;
	  }
	  if ($header === false)
	      exit();

	  $size = count($tab_dico);

	  continue;
	}

	// build les tab;
	foreach ($line as $index => $item)
	{
	  ${$tab_dico[$index]}[$line[$header]] = $item;
	}

  }
  fclose($handle);
}
else
  exit();

while (1) {
  $line;

  echo "Entrez votre commande: ";

  $line = fgets(STDIN);
  if (feof(STDIN) == true)
	break;

  eval($line);
}

fclose($stdin);
