<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/13/18
 * Time: 10:38 AM
 */


// get le contenue de mon file, le met dans mon
$data = json_decode($_POST["data"]);

$fp = fopen('file.csv', 'w+');

foreach ($data as $fields) {
  fputcsv($fp, $fields, ";");
}

fclose($fp);
