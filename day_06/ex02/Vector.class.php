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
  }


  public function __destruct()
  {
//	if (self::$verbose === true)
//	  $this->_print_verbose(" ) destructed");
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
   * @param mixed $w
   */
  private function _setW($w): void
  {
	$this->_w = $w;
  }

  /**
   * @return mixed
   */
  public function getX()
  {
	return $this->_x;
  }

  /**
   * @param mixed $x
   */
  private function _setX(float $x): void
  {
	$this->_x = $x;
  }

  /**
   * @return mixed
   */
  public function getY()
  {
	return $this->_y;
  }

  /**
   * @param mixed $y
   */
  private function _setY(float $y): void
  {
	$this->_y = $y;
  }

  /**
   * @return mixed
   */
  public function getZ()
  {
	return $this->_z;
  }

  /**
   * @param mixed $z
   */
  private function _setZ(float $z): void
  {
	$this->_z = $z;
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
	printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, ",
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
	print file_get_contents("Vertex.doc.txt");
	print "\n";
  }

  public function __toString()
  {
	return
	  self::$verbose === true ?
		sprintf("Vector( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s )",
		  $this->_x, $this->_y, $this->_z, $this->_w,
		  $this->_color->__toString()) :
		sprintf("Vector( x: %.2f, y: %.2f, z:%.2f, w:%.2f )",
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