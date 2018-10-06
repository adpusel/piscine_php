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
  $path = "private/";
  if (file_exists($path) === false)
  {
	mkdir("private");
  }

  file_put_contents($path . "clients", []);
  file_put_contents($path . "products", []);
}

create_all_tab();