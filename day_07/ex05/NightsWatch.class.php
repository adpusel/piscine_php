<?php

/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 2:06 PM
 */
class NightsWatch implements IFighter
{
  private $_soldiers = array();

  public function recruit($pretend)
  {
    if ($pretend instanceof IFighter)
	{
	  array_push($this->_soldiers, $pretend);
	}
  }

  public function fight()
  {
	foreach ($this->_soldiers as $soldier)
	{
	  $soldier->fight();
    }
  }
}