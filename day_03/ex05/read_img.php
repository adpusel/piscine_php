<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 20:57
 * curl --head http://127.0.0.1:8100/piscine_php/day_03/ex05/read_img.php
 */

header('Content-type: image/png');
readfile("../img/42.png");
