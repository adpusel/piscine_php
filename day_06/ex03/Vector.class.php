<?php
/**
 * User: adpusel
 * Date: 10/10/2018
 * Time: 10:46
 */

require_once "Color.class.php";
require_once "Vertex.class.php";

class Vector
{
  static public $verbose = false;

  private $_x;
  private $_y;
  private $_z;
  private $_w = 0;
  private $_dest;
  private $_orig;


  /*------------------------------------*\
      constructor
  \*------------------------------------*/
  public function __construct($kwargs)
  {
	$this->setDest($kwargs["dest"]);
	$this->setOrig($kwargs["orig"]);

	$this->_set_xyz();
	if (self::$verbose === true)
	  $this->_print_verbose(" ) constructed");
	if (!array_key_exists('orig', $kwargs))
	  $this->_orig->__destruct();
  }


  public function __destruct()
  {
	if (self::$verbose === true)
	  $this->_print_verbose(" ) destructed");
  }


  /*------------------------------------*\
    init
  \*------------------------------------*/
  private function _set_xyz()
  {
	$this->_x = $this->_dest->getX() - $this->_orig->getX();
	$this->_y = $this->_dest->getY() - $this->_orig->getY();
	$this->_z = $this->_dest->getz() - $this->_orig->getz();
  }


  /*------------------------------------*\
      assesseur
  \*------------------------------------*/
  /**
   * @param mixed $orig
   */
  public function setOrig($orig): void
  {
	$this->_orig = isset($orig) ?
	  $orig :
	  new Vertex(array('x' => 0, 'y' => 0, 'z' => 0, 'w' => 1));
  }

  /**
   * @param mixed $dest
   */
  public function setDest(Vertex $dest): void
  {
	$this->_dest = $dest;
  }

  /**
   * @return mixed
   */
  public function getW()
  {
	return $this->_w;
  }

  /**
   * @return mixed
   */
  public function getX()
  {
	return $this->_x;
  }

  /**
   * @return mixed
   */
  public function getY()
  {
	return $this->_y;
  }

  /**
   * @return mixed
   */
  public function getZ()
  {
	return $this->_z;
  }

  /*------------------------------------*\
	  methode
  \*------------------------------------*/
  public function magnitude()
  {
	return sqrt(
	  pow($this->_x, 2) +
	  pow($this->_y, 2) +
	  pow($this->_z, 2)

	);
  }

  public function normalize()
  {
	$magnetude = $this->magnitude();

	if ($magnetude !== 1)
	{
	  return new Vector([
		"dest" =>
		  new Vertex(array(

			'x' => $this->_x / $magnetude,
			'y' => $this->_y / $magnetude,
			'z' => $this->_z / $magnetude,
		  ))]);
	}
	else
	  return clone $this;
  }

  public function add(Vector $Vtc)
  {
	return new Vector([
	  "dest" =>
		new Vertex(array(

		  'x' => $this->_x + $Vtc->getX(),
		  'y' => $this->_y + $Vtc->getY(),
		  'z' => $this->_z + $Vtc->getZ(),
		))]);
  }

  public function sub(Vector $Vtc)
  {
	return new Vector([
	  "dest" =>
		new Vertex(array(

		  'x' => $this->_x - $Vtc->getX(),
		  'y' => $this->_y - $Vtc->getY(),
		  'z' => $this->_z - $Vtc->getZ(),
		))]);
  }


  public function opposite()
  {
	return new Vector([
	  "dest" =>
		new Vertex(array(

		  'x' => $this->_x * -1,
		  'y' => $this->_y * -1,
		  'z' => $this->_z * -1,
		))]);
  }


  public function scalarProduct($nb)
  {
	return new Vector([
	  "dest" =>
		new Vertex(array(

		  'x' => $this->_x * $nb,
		  'y' => $this->_y * $nb,
		  'z' => $this->_z * $nb,
		))]);
  }


  public function dotProduct(Vector $rhs)
  {
	return (
	  $this->_x * $rhs->getX() +
	  $this->_y * $rhs->getY() +
	  $this->_z * $rhs->getZ()
	);
  }

  public function crossProduct(Vector $rhs)
  {
	return (new Vector(
	  array('dest' =>
			  new Vertex(array(
				'x' =>
				  (($this->_y * $rhs->getZ()) -
					($this->_z * $rhs->getY())),
				'y' =>
				  (($this->_z * $rhs->getX()) -
					($this->_x * $rhs->getZ())),
				'z' =>
				  (($this->_x * $rhs->getY()) -
					($this->_y * $rhs->getX()))
			  )))
	));
  }

  public function cos(Vector $rhs)
  {
	return (
	  (
		$this->_x * $rhs->getX() +
		$this->_y * $rhs->getY() +
		$this->_z * $rhs->getZ()
	  )
	  /
	  (sqrt(
		(
		  $this->_x * $this->_x +
		  $this->_y * $this->_y +
		  $this->_z * $this->_z
		)
		*
		(
		  $rhs->getX() * $rhs->getX() +
		  $rhs->getY() * $rhs->getY() +
		  $rhs->getZ() * $rhs->getZ()
		)
	  )));
  }


  /*------------------------------------*\
	verbose
  \*------------------------------------*/
  public static function setVerbose($mode)
  {
	self::$verbose = $mode;
  }

  private function _print_verbose($str)
  {
	printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f",
	  $this->_x, $this->_y, $this->_z, $this->_w);
	echo $str !== '' ? $str : "";
	echo "\n";
  }

  /*------------------------------------*\
      doc and string
  \*------------------------------------*/
  static function doc()
  {
	print "\n";
	print file_get_contents("Vector.doc.txt");
	print "\n";
  }

  public function __toString()
  {
	return
	  self::$verbose === true ?
		sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )",
		  $this->_x, $this->_y, $this->_z, $this->_w) :
		sprintf("Vector( x:%.2f, y: %.2f, z:%.2f, w:%.2f )",
		  $this->_x, $this->_y, $this->_z, $this->_w);
  }

  /*------------------------------------*\
      mange err
  \*------------------------------------*/
  public function __set($att, $value)
  {
	print "err : $att => $value";
	return;
  }
}