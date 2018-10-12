<?php
/**
 * User: adpusel
 * Date: 12/10/2018
 * Time: 06:45
 */

require_once "map.class.php";


$Map = new Map();

echo <<< END

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Tableau html simple</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>


END;


echo  <<< END

<table border="1">
   <tbody>
END;

$Map->print_tab();

echo   <<< END
 </tbody>
</table>
END;


