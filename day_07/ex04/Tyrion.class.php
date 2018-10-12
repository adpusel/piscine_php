<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 12:22 PM
 */

include_once "Lannister.class.php";

class Tyrion extends Lannister
{
  public function sleepWith($obj)
  {
	if ($obj instanceof Lannister)
	  print "Not even if I'm drunk !";
	else
	  print "Let's do this.";
	echo "\n";
	return;
  }
}