<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/13/18
 * Time: 11:49 AM
 */

// read le fichier css

$handle = fopen("file.csv", "r");


$data = array();
while (($line = fgetcsv($handle, 1000, ";")) !== FALSE)
{
  $data[] = $line[1];
}
fclose($handle);

echo json_encode($data);