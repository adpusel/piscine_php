<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/3/18
 * Time: 5:18 PM
 */

// je cherche toute les photo

// dl a link with php


//if (file_exists("http://php.net/images/logos/php-logo.svg")) {
//    header('Content-Description: File Transfer');
//    header('Content-Type: application/octet-stream');
//    header('Content-Disposition: attachment; filename="'.basename($file).'"');
//    header('Expires: 0');
//    header('Cache-Control: must-revalidate');
//    header('Pragma: public');
//    header('Content-Length: ' . filesize($file));
//    readfile($file);
//    echo $file;
//    exit;
//}

file_put_contents("Tmpfile.zip", fopen("http://php.net/images/logos/php-logo.svg", 'r'));