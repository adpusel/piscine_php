<?php
/**
 * User: adpusel
 * Date: 12/10/2018
 * Time: 07:37
 */

class ObjetMap
{

  protected $_coord;
  protected  $_color;

  public function __construct($coord, $color)
  {
	$this->_coord = $coord;
	$this->_color  = $color;
  }

  /**
   * @return mixed
   */
  public function getCoord()
  {
	return $this->_coord;
  }

}