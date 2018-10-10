<?php
/**
 * User: adpusel
 * Date: 10/10/2018
 * Time: 06:46
 */

require_once "Color.class.php";

class Vertex
{
  static public $verbose = false;

  private $_x;
  private $_y;
  private $_z;
  private $_w = 1.0;
  private $_color;


  /*------------------------------------*\
      constructor
  \*------------------------------------*/
  public function __construct($kwargs)
  {
	$this->setX($kwargs["x"]);
	$this->setY($kwargs["y"]);
	$this->setZ($kwargs["z"]);
	if (isset($kwargs["w"]))
	  $this->setW($kwargs["w"]);
	$this->setColor($kwargs["color"]);

	if (self::$verbose === true)
	  $this->_print_verbose(" ) constructed");
  }


  public function __destruct()
  {
	if (self::$verbose === true)
	  $this->_print_verbose(" ) destructed");
  }


  /*------------------------------------*\
      assesseur
  \*------------------------------------*/

  /**
   * @param mixed $color
   */
  public function setColor($color): void
  {
	if (isset($color))
	  $this->_color = $color;
	else
	  $this->_color =
		new Color(array('red' => 0xff, 'green' => 0xff, 'blue' => 0xff));
  }


  /**
   * @return mixed
   */
  public function getColor()
  {
	return $this->_color;
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
  public function setW($w): void
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
  public function setX(float $x): void
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
  public function setY(float $y): void
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
  public function setZ(float $z): void
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
	print($this->_color);
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
		sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s )",
		  $this->_x, $this->_y, $this->_z, $this->_w,
		  $this->_color->__toString()) :
		sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )",
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