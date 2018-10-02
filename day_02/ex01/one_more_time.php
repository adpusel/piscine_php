#!/usr/bin/php
<?php
/**
 * User: adpusel
 * Date: 24/09/2018
 * Time: 09:06
 */


// test if


//permet de set la bonne timezone pour la bonne date au bon endroit
date_default_timezone_set("Europe/Paris");


/*------------------------------------*\
    data
\*------------------------------------*/

// days tab
$day_tab =
  ["/[L|l]undi/", "/[M|m]ardi/", "/[M|m]ercredi/", "/[J|j]eudi/",
	"/[V|v]endredi/",
	"/[S|s]amedi/", "/[D|d]imanche/"];

// check number
$reg_day_num = "/0[1-9]|[12]\d|3[01]/";

// month tab
$tab_month =
  ["/[J|j]anvier/", "/[F|f]evrier/", "/[M|m]ars/", "/[A|a]vril/", "/[M|m]ai/",
	"/[J|j]uin/", "/[J|j]uillet/", "/[A|a]out/", "/[S|s]eptembre/",
	"/[O|o]ctobre/", "/[N|n]ovembre/", "/[D|d]ecembre/"];

// check annee
$reg_annee = "/[0-9]{4}/";

// check h/mim/s
$reg_hour = "/([0-5][0-6])|60/";


/*------------------------------------*\
    funtion
\*------------------------------------*/

function check_reg($reg, $string)
{
  if (preg_match($reg, $string))
  {
	return true;
  }
  return false;
}

function check_reg_tab($tab, $string, &$res)
{
  foreach ($tab as $index => $item)
  {
	if (preg_match($item, $string))
	{
	  {
		$res = $index + 1;
		return true;
	  }
	}
  }
  return false;
}

function check_hour($to_split, $reg_hour)
{
  $to_split = explode(':', $to_split);
  if (count($to_split) !== 3)
  {
	return (false);
  }

  foreach ($to_split as $item)
  {
	if (check_reg($reg_hour, $item) === false)
	{
	  return (false);
	}
  }
  return (true);
}

// check and generate the date
function get_timestamp_to_str($tab, $day_number, $month_number, &$timestamp)
{
  $date = "$day_number-$month_number-$tab[3] $tab[4]";
  echo "$date\n";
  $dtime = DateTime::createFromFormat("d-n-Y H:i:s", $date);

  echo strtotime("$date");
  echo date("d n Y H:i:s");
  echo "\n";

  if ($dtime !== false)
  {
	$timestamp = $dtime->getTimestamp();
  }
  return $dtime ? true : false;
}


/*------------------------------------*\
    main
\*------------------------------------*/

// checck le retour de strtotime
if ($argc > 1)
{
//    echo "$argv[1] \n";
  $tab = explode(" ", $argv[1]);

  if (1
	&& count($tab) === 5
	&& check_reg_tab($day_tab, $tab[0], $day) === true
	&& check_reg($reg_day_num, $tab[1]) === true
	&& check_reg_tab($tab_month, $tab[2], $month_number) === true
	&& check_reg($reg_annee, $tab[3]) === true
	&& check_hour($tab[4], $reg_hour)
  )
  {
	if ($timestamp === false)
	{
	  echo "err $argv[1] \n";
	}
	else
	{
	  echo "ok $timestamp \n";
	}
  }

//}
//else
//  {
//	echo "err $argv[1] \n";
//  }
}

//echo date('m/d/Y', 1299446702);