<?php

/**
 * User: adpusel
 * Date: 11/10/2018
 * Time: 22:37
 */


class px
{
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


// dans la map il y a un tab qui gere les objet init,
// avant de print la map, je passe sur les bateau qui me donne leur nouvelle position et la je print la mapz


class Map
{
  private $_tab_map;
  private $_height = 40;
  private $_width = 40;
  private $_obstacle;

  private function _buildTab()
  {
	for ($i = 0; $i < $this->_height; $i++)
	{
	  $line = array();
	  for ($y = 0; $y < $this->_width; $y++)
	  {
		$line[$y] = new px($i, $y, "black");
	  }
	  $this->_tab_map[$i] = $line;
	}
  }

  public function print_tab()
  {
    for ($i = 0; $i < $this->_height; $i++)
	{
	  echo '<tr>';
	  for ($y = 0; $y < $this->_width; $y++)
	  {

//	    echo $this->tab_map[$i][$y]->color === "black" ? " . " : " x ";
		echo "<th class='" . $this->_tab_map[$i][$y]->color . "'></th>";

	  }
	  echo '</tr>';
	}
  }


  public function __construct()
  {
	$this->_buildTab();
  }
}

//$map = new Map();
//$map->print_tab();