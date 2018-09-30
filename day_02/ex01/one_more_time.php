#!/usr/bin/php
<?php
/**
 * User: adpusel
 * Date: 24/09/2018
 * Time: 09:06
 */


// je convertie ensuite ca en timeStamp
//$date = date_create_from_format('j-M-Y', '15-Fev-2009');
//setlocale(LC_ALL, 'fr_FR');


// je dois faire tout les jours de la semaine, get le numero du mois


// je fais un tab avec tout les jours et ca me retourn false if rien, le jour sinon ?
$day_tab =
  ["/[L|l]undi/", "/[M|m]ardi/", "/[M|m]ercredi/", "/[J|j]eudi/",
	"/[V|v]endredi/",
	"/[S|s]amedi/", "/[D|d]imanche/"];
$day_num = "/0[1-9]|[12]\d|3[01]/";
$tab_month =
  ["/z/",
	"/[J|j]anvier/", "/[F|f]evrier/", "/[M|m]ars/", "/[A|a]vril/", "/[M|m]ai/",
	"/[J|j]uin/", "/[J|j]uillet/", "/[A|a]out/", "/[S|s]eptembre/",
	"/[O|o]ctobre/", "/[N|n]ovembre/", "/[D|d]ecembre/"];
$annee = "/[0-9]{4}/";


function check_reg($reg, $string)
{
  if (preg_match($reg, $string)) {
	return true;
  }
  return false;
}

// je peux mettre un ptr et set le nb ici :)
function check_reg_tab($tab, $string, &$res)
{
  foreach ($tab as $index => $item) {
	if (preg_match($item, $string)) {
	  {
		$res = $index;
		return true;
	  }
	}
  }
  return false;
}

// checck le retour de strtotime
if ($argc > 1) {
//    echo "$argv[1] \n";
  $tab = explode(" ", $argv[1]);

  if (1
	&& count($tab) === 5
	&& check_reg_tab($day_tab, $tab[0], $day) === true
	&& check_reg($day_num, $tab[1]) === true
	&& check_reg_tab($tab_month, $tab[2], $month) === true) {

	$format = "$tab[1]-$month-$tab[3] $tab[4]";
	$date = strtotime($format);
	if ($date === false) {
	  echo "err $argv[1] \n";
	}
	else {
	  echo "$date 5\n";
	}
  }
  else {
	echo "err $argv[1] \n";
  }
}