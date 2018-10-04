#!/usr/bin/php
<?php
/**
 * User: adpusel
 * Date: 24/09/2018
 * Time: 07:57
 */

if ($argc >= 2) {

  $line = $argv[1];
  $string = preg_replace('#\s+#', ' ', $line);
  $string = trim($string);
  echo "$string\n";
}

