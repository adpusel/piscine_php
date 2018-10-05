<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/5/18
 * Time: 3:35 PM
 */





// rm /Users/adpusel/code/42/piscine_php/day_04/private/passwd
// curl -d login=toto -d passwd=titi -d submit=OK 'http://localhost:8100/piscine_php/day_04/ex02/create.php'
// curl 'http://localhost:8100/piscine_php/day_04/ex04/login.php?login=toto&passwd=titi'


include("auth.php");

session_start();

$user = $_GET["login"] ? $_GET["login"] : "";
$passwd = $_GET["passwd"] ? $_GET["passwd"] : "";

if (auth($user, $passwd) === true)
{
  $_SESSION["loggued_on_user"] = $user;
  echo "OK\n";
}
else{
  $_SESSION["loggued_on_user"] = "";
  echo "ERROR\n";
}