<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/1/18
 * Time: 8:55 AM
 */

//$date = date_create_from_format('j-M-Y', '15-Feb-2009');


//setlocale(LC_ALL, 'fr_FR');

// essayer avec un jour qui n'existe pas

// ne verifie pas que je jour est bien le bom jour,
// je dois le faire a la main pour comparer les deux date

//echo date_default_timezone_set("Europe/Paris");
date_default_timezone_set("Europe/Paris");

$format = 'Y-m-d H:i:s';
$date = DateTime::createFromFormat($format, 'Sun 2018-10-1 15:16:17');
echo "Format: $format; " . $date->format('D Y-m-d H:i:s') . "\n";


//$date = date_create_from_format('j-M-Y', '12-07-1982 01:20:20');
$date = DateTime::createFromFormat('d-m-Y H:i:s', '12-07-1982 01:20:20');
echo date_format($date, 'Y-m-d H:i:s');