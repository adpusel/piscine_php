<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 11:45 AM
 */

class Targaryen
{
  public function resistsFire() {
	return false;
  }

  public function getBurned()
  {
    if (static::resistsFire() === true)
        return "emerges naked but unharmed";
    else return "burns alive";
  }
}