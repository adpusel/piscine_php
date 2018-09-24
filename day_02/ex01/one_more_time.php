#!/usr/bin/php
<?php
/**
 * User: adpusel
 * Date: 24/09/2018
 * Time: 09:06
 */

// je dois faire tout les jours de la semaine, get le numero du mois
setlocale(LC_ALL, 'fr_FR');


// je fais un tab avec tout les jours et ca me retourn false if rien, le jour sinon ?
// #["M|mardi", ] #

// pas de solution faire la regex pour tout :)
// si c'est ok je dois encore passer dans un tab pour le comvertir et ca c'est relou
// sinon ? [reg pour verifier], si ok, je passe tout en minuscule, je split pour avoir le tab
// je convertit avec un tab pour avoir les valeur, je passe sa pour avoir le time stamp
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978)) . "\n";

$date = date_create_from_format('j-M-Y', '15-Fev-2009');
//echo date_format($date, 'Y-m-d');

function myStrtotime($date_string)
{
  return strtotime(strtr(strtolower($date_string),
	array('janvier' => 'jan', 'février' => 'feb', 'mars' => 'march',
	  'avril' => 'apr', 'mai' => 'may', 'juin' => 'jun', 'juillet' => 'jul',
	  'août' => 'aug', 'septembre' => 'sep', 'octobre' => 'oct',
	  'novembre' => 'nov', 'décembre' => 'dec')));
}
