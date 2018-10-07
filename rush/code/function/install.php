<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 11:29 AM
 */
require_once "manage_db.php";










/*------------------------------------*\
    init les option de la db
\*------------------------------------*/
// pas besoin de flock
function create_all_tab()
{


  /*------------------------------------*\
	  fill product
  \*------------------------------------*/
  $prod = array(
	[
	  "title" => "lama_fache",
	  "price" => "900",
	  "img" => "rsc/logo.jpg",
	  "cat" => [ 1 ]
	],
	[
	  "title" => "lama__pas_fache",
	  "price" => "95481",
	  "img" => "rsc/logo.jpg",
	  "cat" => [1]
	],
	[
	  "title" => "lama_super_pas_facher",
	  "price" => "35.889",
	  "img" => "rsc/logo.jpg",
	  "cat" => []
	],
	[
	"title" => "lama_super_pas_facher",
	"price" => "35.889",
	"img" => "rsc/logo.jpg",
	"cat" => []
	]
  );


  $cat = array(
    "facher",
	"pas facher",
	"sutpide",
	"pas stupide"
  );

  $path = "../private/";
  if (file_exists($path) === false)
  {
	mkdir($path);
  }

  file_put_contents($path . "clients", []);
  file_put_contents($path . "products", serialize($prod));
  file_put_contents($path . "cat", serialize($cat));
}





create_all_tab();