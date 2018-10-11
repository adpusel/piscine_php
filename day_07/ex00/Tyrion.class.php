<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 11:36 AM
 */

class Tyrion extends Lannister
{
  public function __construct()
  {
	parent::__construct();
	print "My name is Tyrion\n";
  }

  public function getSize()
  {
	return "Short";
  }

}
