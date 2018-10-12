<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 3:05 PM
 */

// les combatant se bate enteur, il sont des enfants de la class Fighter

abstract class Fighter
{
  protected $_type;

  public function __construct($type)
  {
	$this->_type = $type;
  }

  /**
   * @return mixed
   */
  public function getType()
  {
	return $this->_type;
  }

  abstract function fight($t);
}