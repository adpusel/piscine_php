<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 12:22 PM
 */

include_once "Lannister.class.php";

class Jaime extends Lannister
{
  public function sleepWith($obj)
  {
	if ($obj instanceof Cersei)
	  print "With pleasure, but only in a tower in Winterfell, then.";
	else if ($obj instanceof Lannister)
	  print "Not even if I'm drunk !";
	else
	  print "Let's do this.";
	echo "\n";
	return;
  }

}