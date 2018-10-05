<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 19:30
 */

foreach ($_GET as $index => $item)
{
  echo "$index: $item\n";
}

// curl 'http://127.0.0.1:8100/piscine_php/day_03/ex02/print_get.php?login=mmontinet'
// curl 'http://127.0.0.1:8100/piscine_php/day_03/ex02/print_get.php?gdb=pied2biche&barry=barreamine'