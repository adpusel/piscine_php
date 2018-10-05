#!/usr/bin/php
<?php
/**
 * User: adpusel
 * Date: 24/09/2018
 * Time: 09:06
 */

//permet de set la bonne timezone pour la bonne date au bon endroit
date_default_timezone_set("Europe/Paris");

/*------------------------------------*\
    data
\*------------------------------------*/
// days tab
$reg_tab_day =
    ["/[L|l]undi/", "/[M|m]ardi/", "/[M|m]ercredi/", "/[J|j]eudi/",
        "/[V|v]endredi/",
        "/[S|s]amedi/", "/[D|d]imanche/"];

// check number
$reg_day_num = "/0[1-9]|[12]\d|3[01]/";

// month tab
$reg_tab_month =
    ["/[J|j]anvier/", "/[F|f]evrier/", "/[M|m]ars/", "/[A|a]vril/", "/[M|m]ai/",
        "/[J|j]uin/", "/[J|j]uillet/", "/[A|a]out/", "/[S|s]eptembre/",
        "/[O|o]ctobre/", "/[N|n]ovembre/", "/[D|d]ecembre/"];

// check h/mim/s
$reg_hour = "/[0-9]{2}:[0-9]{2}:[0-9]{2}/";
$reg_year = "/[0-9]{4}/";


/*------------------------------------*\
    funtion
\*------------------------------------*/

function check_reg($reg, $string)
{
    if (preg_match($reg, $string)) {
        return true;
    }
    return false;
}

function check_reg_tab($tab, $string, &$res)
{
    foreach ($tab as $index => $item) {
        if (preg_match($item, $string)) {
            {
                $res = $index + 1;
                return true;
            }
        }
    }
    return false;
}


/*------------------------------------*\
    main
\*------------------------------------*/

//checck le retour de strtotime
if ($argc > 1) {
    $tab = explode(" ", $argv[1]);
    $dtime = false;
    if (1
        && count($tab) === 5
        && check_reg_tab($reg_tab_day, $tab[0], $nop) === true
        && check_reg($reg_day_num, $tab[1]) === true
        && check_reg_tab($reg_tab_month, $tab[2], $month_number) === true
        && check_reg($reg_year, $tab[3]) === true
        && check_reg($reg_hour, $tab[4]) === true
    ) {
        $date = "$tab[1]-$month_number-$tab[3] $tab[4]";
        $dtime = DateTime::createFromFormat("d-n-Y H:i:s", $date);
    }
    if ($dtime !== false) {
        echo $dtime->getTimestamp();
    } else {
        echo "Wrong Format";
    }
    echo "\n";
}
