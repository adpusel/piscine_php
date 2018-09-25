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
$day_tab =  ["#L|lundi#", "#M|mardi", "#M|mercredi#", "#J|jeudi#", "#V|vendredi#", "#S|samedi#", "#D|dimanche#"];
$day_num = "(0[1-9]|[12]\d|3[01])";
$month = ["S|septembre", "O|octobre", "N|novembre", "D|decembre", "J|javier", "F|fevier", "M|mars", "A|avril", "M|mai", "J|juin", "J|juillet", "A|aout"];
$
//$number   je peux check dans la date si les nb sont ok

if (preg_match($day_tab[0], "Lundi"))
{
  echo 'Le mot que vous cherchez se trouve dans la chaîne';
}


" #[\w\.-]+@([\w\-]+|\.)+[A-Z0-9]{2,4}(?x)# ";
// pas de solution faire la regex pour tout :)
// si c'est ok je dois encore passer dans un tab pour le comvertir et ca c'est relou
// sinon ? [reg pour verifier], si ok, je passe tout en minuscule, je split pour avoir le tab
// je convertit avec un tab pour avoir les valeur, je passe sa pour avoir le time stamp
