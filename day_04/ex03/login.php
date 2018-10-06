<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/5/18
 * Time: 3:35 PM
 */







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