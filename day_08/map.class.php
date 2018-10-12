<?php

/**
 * User: adpusel
 * Date: 11/10/2018
 * Time: 22:37
 */


class px {
  public $x;
  public $y;
  public $color;

  public function __construct($x, $y, $color)
  {
    $this->y = $y;
    $this->x = $x;
    $this->color = $color;
  }
}



class map
{
	private $tab_map;

	private function _buildTab()
	{
	  for ($i = 0; $i < 150; $i++) {
		$line = array();
		for ($y = 0; $y < 100; $y++) {
		  $line[$y] = new px($i, $y, "black");
	    }
	    $this->tab_map[$i] = $line;
	  }
	}

	public function print_tab()
	{
	  for ($i = 0; $i < 150; $i++) {
		for ($y = 0; $y < 100; $y++) {
		  echo $this->tab_map[$i][$y]->color === "black" ? " . " : " x ";
		}
		echo "\n";
	  }
	}


	public function __construct()
	{
	  $this->_buildTab();
	}
}

new map();
$map->print_tab();