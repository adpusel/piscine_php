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
	if ($_COOKIE[$_GET['name']] !== NULL)
	{
	  echo $_COOKIE[$_GET['name']] . "\n";
	}
	break;
  case "del":
	setcookie($_GET['name'], "", time() - 3600);
	break;
}


/*

curl -c cook.txt 'http://127.0.0.1:8100/piscine_php/day_03/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
curl -b cook.txt 'http://127.0.0.1:8100/piscine_php/day_03/ex03/cookie_crisp.php?action=get&name=plat'
curl -c cook.txt 'http://127.0.0.1:8100/piscine_php/day_03/ex03/cookie_crisp.php?action=del&name=plat'
curl -b cook.txt 'http://127.0.0.1:8100/piscine_php/day_03/ex03/cookie_crisp.php?action=get&name=plat'

*/