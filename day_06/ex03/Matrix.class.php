<?php
/**
 * User: adpusel
 * Date: 10/10/2018
 * Time: 14:10
 */

require_once "Vector.class.php";

class Matrix
{
  static public $verbose = false;

  const  IDENTITY = "IDENTITY";
  const  SCALE = "SCALE";
  const  RX = "RX";
  const  RY = "RY";
  const  RZ = "RZ";
  const  TRANSLATION = "TRANSLATION";
  const  PROJECTION = "PROJECTION";
  private $_current;
  private $_matrice = [
	[0, 0, 0, 0],
	[0, 0, 0, 0],
	[0, 0, 0, 0],
	[0, 0, 0, 0]
  ];

  /*------------------------------------*\
      constructor
  \*------------------------------------*/
  public function __construct($kwargs)
  {
	$res = '';

    if ($kwargs["preset"] === self::IDENTITY)
	{
	  $res = $this->_identity();
	  $this->_current = self::IDENTITY;
	}

    if (self::$verbose === true)
	  $this->_print_verbose($this->_current);
  }


  public function __destruct()
  {

  }

  private function _identity()
  {
	$this->_matrice[0][0] = 1;
	$this->_matrice[1][1] = 1;
	$this->_matrice[2][2] = 1;
	$this->_matrice[3][3] = 1;
	return $this->_print_matrice();
  }

  private function _print_matrice()
  {
	return
	  sprintf("M | vtcX | vtcY | vtcZ | vtxO\n") .
	  sprintf("-----------------------------\n") .
	  sprintf("x | %.2f | %.2f | %.2f | %.2f\n",
		$this->_matrice[0][0],
		$this->_matrice[0][1],
		$this->_matrice[0][2],
		$this->_matrice[0][3]) .
	  sprintf("y | %.2f | %.2f | %.2f | %.2f\n",
		$this->_matrice[1][0],
		$this->_matrice[1][1],
		$this->_matrice[1][2],
		$this->_matrice[1][3]) .
	  sprintf("z | %.2f | %.2f | %.2f | %.2f\n",
		$this->_matrice[2][0],
		$this->_matrice[2][1],
		$this->_matrice[2][2],
		$this->_matrice[2][3]) .
	  sprintf("x | %.2f | %.2f | %.2f | %.2f\n",
		$this->_matrice[3][0],
		$this->_matrice[3][1],
		$this->_matrice[3][2],
		$this->_matrice[3][3]);
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
	printf("Matrix %s instance constructed", $str);
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
	return $this->_print_matrice();
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