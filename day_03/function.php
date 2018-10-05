<?php
/**
 * User: adpusel
 * Date: 05/10/2018
 * Time: 19:01
 */

function ft_is_set($tab, $key)
{
  return ($tab[$key] !== NULL || $tab[$key] == '');
}