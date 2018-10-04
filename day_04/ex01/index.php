<?php

if ($_GET["login"] !== NULL && $_GET["passwd"] !== NULL)
{
  session_start();
  $_SESSION["login"] = $_GET["login"];
  $_SESSION["passwd"] = $_GET["passwd"];
}
?>
<html><body>
<form method="get">
    Identifiant : <input name="login" value='<?= $_SESSION["login"] ?>'>
    <br />
    mdp : <input name="passwd" value='<?= $_SESSION["passwd"] ?>'>
    <input type="submit" value="ok">
</form >
</body ></html >

<!--    curl -v -c cook.txt 'http://localhost:8888/piscine_php/day_04/ex01/index.php'
        curl -v -c cook.txt 'http://localhost:8888/piscine_php/day_04/ex01/index.php?login=sb&passwd=beeone&submit=OK'
        curl -v 'http://localhost:8888/piscine_php/day_04/ex01/index.php'
-->