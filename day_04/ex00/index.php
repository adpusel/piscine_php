<?php

/*
 *
        curl -v -c cook.txt 'http://localhost:8100/piscine_php/day_04/ex01/index.php'
        curl -v -c cook.txt 'http://localhost:8100/piscine_php/day_04/ex01/index.php?login=sb&passwd=beeone&submit=OK'
        curl -v 'http://localhost:8100/piscine_php/day_04/ex01/index.php'

 * */

function ft_is_set($tab, $key)
{
  return ($tab[$key] !== NULL || $tab[$key] == '');
}

session_start();

if (ft_is_set($_GET, "login") &&
    ft_is_set($_GET, "passwd") &&
    $_GET["submit"] === "OK")
{
  $_SESSION["login"] = $_GET["login"];
  $_SESSION["passwd"] = $_GET["passwd"];
}
?>


<html><body>
<form name="" method="get">
    Identifiant : <input name="login" value='<?= $_SESSION["login"] ?>'>
    <br />
    mdp : <input name="passwd" value='<?= $_SESSION["passwd"] ?>'>
    <input type="submit" name="submit" value="OK">
</form >
</body ></html >

