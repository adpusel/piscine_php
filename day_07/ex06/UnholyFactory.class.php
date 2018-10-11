<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 2:37 PM
 */


// lama est pas de type figter ==> pas work
class UnholyFactory
{
  private $_soldier_array = array();

  public function absorb($soldier)
  {
	if ($soldier instanceof Fighter)
	{
	  $soldier_type = $soldier->getType();
	  if (array_key_exists($soldier_type, $this->_soldier_array) === false)
	  {
		print "(Factory absorbed a fighter of type $soldier_type)";
		$this->_soldier_array[$soldier_type] = $soldier;
	  }
	  else
		print "(Factory already absorbed a fighter of type foot soldier)";
	}
	else
	  echo "(Factory can't absorb this, it's not a fighter)";
	echo "\n";
	return;
  }

  public function fabricate($rf)
  {
      if (array_key_exists($rf, $this->_soldier_array))
	  {
	    print "(Factory fabricates a fighter of type $rf)\n";
	    return $this->_soldier_array[$rf];
	  }
      else
		print "(Factory hasn't absorbed any fighter of type $rf)\n";
  }

  // check si c'est bien un instance de mon type

  // check si il n'est pas deja la
}