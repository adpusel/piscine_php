<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 20:15
 */

$action = $_GET["action"];

switch ($action)
{
  case "set":
	setcookie(
	  $_GET["name"],
	  $_GET["value"]
	);
	break;
  case "get":
	if (array_key_exists($_GET['name'], $_COOKIE))
	{
	  echo $_COOKIE[$_GET['name']] . "\n";
	}
	break;
  case "del":
	setcookie($_GET['name'], "", time() - 3600);
	break;
}


/*

curl -c cook.txt 'http://localhost:8888/day_03/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
curl -b cook.txt 'http://localhost:8888/day_03/ex03/cookie_crisp.php?action=get&name=plat'
curl -c cook.txt 'http://localhost:8888/day_03/ex03/cookie_crisp.php?action=del&name=plat'
curl -b cook.txt 'http://localhost:8888/day_03/ex03/cookie_crisp.php?action=get&name=plat'

*/