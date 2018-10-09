<?php
/**
 * User: adpusel
 * Date: 08/10/2018
 * Time: 18:46
 */

// open file
$file = file_get_contents("test.twig");


//print_r($file);


// parse file
// si c'est un tab ca fait ca :);


// charger les boucle php
// si je genere un new file php c'est pas bon ca
// je ne sais pas comment faire les loop


//function ($ar)
//{
//  $tab = array("super" => "mager", "name" => "toto", "tybus" => [
//	["link" => "super_link",
//	  "name" => "ce truc est cool"
//	], ["link" => "super_link",
//	  "name" => "ce truc est cool"]]
//  );
//
//  $tab_out = array();
//  $name = "tybus";
//
//  foreach ($name as $key => $item)
//  {
//
//	if ($key === trim($ar[1]))
//	{
//	  echo "$item\n";
//	  return ($item);
//	}
//  }
//}
//
//;


$tab = array("super" => "mager", "name" => "toto");

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


echo simple_template($file, $tab);



//function template_simple($file, $data)
//{
//  $file = preg_replace_callback("#\{%(.*)%\}{2}#", function ($ar) {
//
//
//	$tab = array("super" => "mager", "name" => "toto", "tybus" => [
//	  "link" => "super_link",
//	  "name" => "ce truc est cool"
//	]);
//
//	foreach ($tab as $key => $item)
//	{
//
//	  echo "$item\n";
//	}
//
//	trim
//	var_dump($ar[1]);
//  }, $file);
//  echo $file;
//}



