<?php

/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 2:06 PM
 */
class NightsWatch implements IFighter
{

  public function recruit($obj)
  {
    if (method_exists($obj, 'fight'))
	{
	  $obj->fight();
	}
  }

  public function fight()
  {
  }
}