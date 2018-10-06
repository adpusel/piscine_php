<?php

/*
 *
        curl -v -c cook.txt 'http://localhost:8888/piscine_php/day_04/ex00/index.php'
        curl -v -c cook.txt 'http://localhost:8888/piscine_php/day_04/ex00/index.php?login=sb&passwd=beeone&submit=OK'
        curl -v -b cook.txt 'http://localhost:8888/piscine_php/day_04/ex00/index.php'
                    curl -v 'http://localhost:8888/piscine_php/day_04/ex00/index.php'

 * */

session_start();

if ($_GET["submit"] === "OK")
{
  $_SESSION["login"] = $_GET["login"];
  $_SESSION["passwd"] = $_GET["passwd"];
}
?>


<html><body>
<form name="index.php" method="get">
    Identifiant : <input name="login" value='<?= $_SESSION["login"] ?>'>
    <br />
    mdp : <input name="passwd" value='<?= $_SESSION["passwd"] ?>'>
    <input type="submit" name="submit" value="OK">
</form >
</body ></html >

