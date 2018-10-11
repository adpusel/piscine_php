<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 12:22 PM
 */

class Lannister
{
  public function sleepWith($otherPerson)
  {
	if($otherPerson instanceof Lannister)
	  printf("Not even if I'm drunk !\n");
	else
	  printf("Let's do this.\n");
  }
}
