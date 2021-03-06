<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 11:54 AM
 */

abstract class House
{

  abstract public function getHouseName();

  abstract public function getHouseMotto();

  abstract public function getHouseSeat();

  public function introduce()
  {
	print "House " .
	  static::getHouseName() .
	  " of " . static::getHouseSeat() . " : " .
	  '"' . static::getHouseMotto() . '"' . "\n";
  }

}