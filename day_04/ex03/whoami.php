<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/5/18
 * Time: 3:58 PM
 */






//         rm /Users/adpusel/code/42/piscine_php/day_04/private/passwd
//         curl -d login=toto -d passwd=titi -d submit=OK 	'http://localhost:8100/piscine_php/day_04/ex02/create.php'
//         curl -c cook.txt 								'http://localhost:8100/piscine_php/day_04/ex04/login.php?login=toto&passwd=titi'
//         curl -b cook.txt 'http://localhost:8100/piscine_php/day_04/ex04/whoami.php'
//         curl -b cook.txt 'http://localhost:8100/piscine_php/day_04/ex04/logout.php'
//         curl -b cook.txt 'http://localhost:8100/piscine_php/day_04/ex04/whoami.php'

session_start();

if ($_SESSION["loggued_on_user"] !== NULL && $_SESSION["loggued_on_user"] !== "")
    echo $_SESSION["loggued_on_user"]."\n";
else
  echo "ERROR\n";