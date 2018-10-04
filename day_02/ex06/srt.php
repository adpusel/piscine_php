<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 14:45
 */


$tab_nb = array();
$tab_sec = array();;
$tab_str = array();;


$i = 0;
$line;


if ($argc != 2 || file_exists($argv[1]) === false)
  exit();

$data = file_get_contents($argv[1]);
if ($data === false)
    exit();

$data = explode("\n", $data);

$i = 0;
$ii = 0;
$y = 0;
$seg;
while ($i < count($data))
{
    $tab_nb[$ii] = $data[$i++];

    $seg = explode(" --> ", $data[$i++]);
    $tab_sec[$y++] = $seg[0];
    $tab_sec[$y++] = $seg[1];

  	$tab_str[$ii] = $data[$i++];
  	$i++;
  	$ii++;

}

sort($tab_nb);
sort($tab_sec);
sort($tab_str);

$tmp = $tab_str[count($tab_str) - 1];
$tab_str[count($tab_str) - 1] = $tab_str[count($tab_str) - 2];
$tab_str[count($tab_str) - 2] = $tmp;


$i = 0;
$ii = 0;
$y = 0;

while ($i < count($data))
{
  echo "$tab_nb[$ii]\n";
  echo $tab_sec[$y++]." --> ".$tab_sec[$y++]."\n";
  echo "$tab_str[$ii]\n";
  if ($i < 10)
      echo "\n";
  $ii++;
  $i += 4;

}



//print_r($tab_nb);
//print_r($tab_sec);
//print_r($tab_str);