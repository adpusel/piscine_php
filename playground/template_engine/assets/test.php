<?php
/**
 * User: adpusel
 * Date: 08/10/2018
 * Time: 18:46
 */

// open file
$file = file_get_contents("test_for.twig");

$tab = array("super" => "mager", "name" => "toto", "tybus" => [
  "link" => "super_link",
  "name" => "ce truc est cool"
]);

function utils_simple_template($match, $tab)
{
  foreach ($tab as $key => $item)
  {

	if ($key === trim($match[1]))
	{
	  echo "$item\n";
	  return ($item);
	}
  }
}

function simple_template($data, $tab)
{
  $data = preg_replace_callback("#\{\{(.*)\}\}#",

	function ($match) use ($tab) {

	  foreach ($tab as $key => $item)
	  {

		if ($key === trim($match[1]))
		{
		  echo "$item\n";
		  return ($item);
		}
	  }
	}, $data);

  return $data;
}


//echo simple_template($file, $tab);


function build_tab_loob($line, $tab)
{
  $tab_out = array();

  foreach ($tab as $index => $item)
  {

  }
}


function loop_template($data, $tab)
{
  $data = preg_replace_callback("#\{%(.*)%\}(.*)%\}#si",

	function ($match) use ($tab) {

	  // trim le for pour get cool stuff
	  $a = preg_replace("#\{%(.*)%\}#", "", $match[0]);
	  echo trim($a);


	  //    foreach ($tab as $key => $item)
//	  {
//
//	     kepp juste les trucs entre ()
//
//		echo "$item\n";
//	  }

//	  var_dump($match[0]);
	}, $data);

//  echo $data;
}


loop_template($file, $tab);