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
  const  TRANSLATION = "TRANSLATION";
  const  SCALE = "SCALE";
  const  RX = "Ox ROTATION";
  const  RY = "Oy ROTATION";
  const  RZ = "RZ";
  const  PROJECTION = "PROJECTION";
  private $_current;
  public $matrice = [
	[0, 0, 0, 0],
	[0, 0, 0, 0],
	[0, 0, 0, 0],
	[0, 0, 0, 0]
  ];

  public $new_matrice = [
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
	if (isset($kwargs["build"]))
	{
	  $this->matrice = $kwargs["build"];
//	  var_dump($this->matrice);
	}

	if ($kwargs["preset"] === self::IDENTITY)
	{
	  $this->_identity();
	  $this->_current = self::IDENTITY;
	}

	if ($kwargs["preset"] === self::TRANSLATION)
	{
	  $this->_identity();
	  $this->_translation($kwargs["vtc"]);
	  $this->_current = self::TRANSLATION . " preset";
	}


	if ($kwargs["preset"] === self::SCALE)
	{
	  $this->_identity();
	  $this->_scale($kwargs["scale"]);
	  $this->_current = self::SCALE . " preset";
	}


	if ($kwargs["preset"] === self::RX)
	{
	  $this->_identity();
	  $this->_rx($kwargs["angle"]);
	  $this->_current = self::RX . " preset";
	}

	if ($kwargs["preset"] === self::RY)
	{
	  $this->_identity();
	  $this->_ry($kwargs["angle"]);
	  $this->_current = self::RY . " preset";
	}


	if ($kwargs["preset"] === self::RZ)
	{
	  $this->_identity();
	  $this->_rz($kwargs["angle"]);
	  $this->_current = self::RZ . " preset";
	}


	if ($kwargs["preset"] === self::PROJECTION)
	{
	  $this->_pro(
		$kwargs["ratio"],
		$kwargs["fov"],
		$kwargs["near"],
		$kwargs["far"]);
	  $this->_current = self::PROJECTION . " preset";
	}


	if (self::$verbose === true)
	  $this->_print_verbose($this->_current);
	return $this->_print_matrice();
  }


  public function __destruct()
  {

  }

  private function get_case($line, $col, Matrix $matrice)
  {
	$this->new_matrice[$line][$col] =
	  $this->matrice[$line][0] * $matrice->matrice[0][$col] +
	  $this->matrice[$line][1] * $matrice->matrice[1][$col] +
	  $this->matrice[$line][2] * $matrice->matrice[2][$col] +
	  $this->matrice[$line][3] * $matrice->matrice[3][$col];
	echo $this->new_matrice[$line][$col]."\n";

	print $this->matrice[$line][0] . " * " . $matrice->matrice[0][$col] . " + ";
	print $this->matrice[$line][1] . " * " . $matrice->matrice[1][$col] . " + ";
	print $this->matrice[$line][2] . " * " . $matrice->matrice[2][$col] . " + ";
	print $this->matrice[$line][3] . " * " . $matrice->matrice[3][$col] . "\n";
  }


  public function mult(Matrix $matrix)
  {
//	$this->_print_matrice();


	for ($i = 0; $i < 4; $i++)
	{
	  $this->get_case($i, 0, $matrix);
	  $this->get_case($i, 1, $matrix);
	  $this->get_case($i, 2, $matrix);
	  $this->get_case($i, 3, $matrix);
	}
	echo $this->_print_matri($this->new_matrice);
	return new Matrix([
	  "build" => $this->new_matrice
	]);
  }


  private function _pro($ar, $fov, $zNear, $zFfar)
  {
	$tanHalfFOV = tan(deg2rad($fov) / 2.0);
	$zRange = $zNear - $zFfar;
	$this->matrice[0][0] = 1.0 / ($tanHalfFOV * $ar);
	$this->matrice[1][1] = 1.0 / $tanHalfFOV;
	$this->matrice[2][2] = (-$zNear - $zFfar) / $zRange;
	$this->matrice[2][3] = 2.0 * $zFfar * $zNear / $zRange;
	$this->matrice[3][2] = 1.;
  }


  private function _rz($angle)
  {
	$this->matrice[0][0] = round(cos($angle), 2);
	$this->matrice[0][1] = round(sin($angle), 2);

	$this->matrice[1][0] = -round(sin($angle), 2);
	$this->matrice[1][1] = round(cos($angle), 2);
  }


  private function _ry($angle)
  {
	$this->matrice[0][0] = round(cos($angle), 2);
	$this->matrice[0][2] = round(sin($angle), 2);

	$this->matrice[2][0] = -round(sin($angle), 2);
	$this->matrice[2][2] = round(cos($angle), 2);
  }

  private function _rx($angle)
  {
	$this->matrice[1][1] = round(cos($angle), 2);
	$this->matrice[2][1] = round(sin($angle), 2);

	$this->matrice[1][2] = -round(sin($angle), 2);
	$this->matrice[2][2] = round(cos($angle), 2);
  }


  private function _scale($scale)
  {
	$this->matrice[0][0] = $scale;
	$this->matrice[1][1] = $scale;
	$this->matrice[2][2] = $scale;
  }


  private function _translation(Vector $vtc)
  {
	$this->matrice[0][3] = $vtc->getX();
	$this->matrice[1][3] = $vtc->getY();
	$this->matrice[2][3] = $vtc->getZ();
  }


  private function _identity()
  {
	$this->matrice[0][0] = 1;
	$this->matrice[1][1] = 1;
	$this->matrice[2][2] = 1;
	$this->matrice[3][3] = 1;
  }

  private function _print_matrice()
  {
	return
	  sprintf("M | vtcX | vtcY | vtcZ | vtxO\n") .
	  sprintf("-----------------------------\n") .
	  sprintf("x | %.2f | %.2f | %.2f | %.2f\n",
		$this->matrice[0][0],
		$this->matrice[0][1],
		$this->matrice[0][2],
		$this->matrice[0][3]) .
	  sprintf("y | %.2f | %.2f | %.2f | %.2f\n",
		$this->matrice[1][0],
		$this->matrice[1][1],
		$this->matrice[1][2],
		$this->matrice[1][3]) .
	  sprintf("z | %.2f | %.2f | %.2f | %.2f\n",
		$this->matrice[2][0],
		$this->matrice[2][1],
		$this->matrice[2][2],
		$this->matrice[2][3]) .
	  sprintf("w | %.2f | %.2f | %.2f | %.2f\n",
		$this->matrice[3][0],
		$this->matrice[3][1],
		$this->matrice[3][2],
		$this->matrice[3][3]);
  }


  private function _print_matri($matrice)
  {
	return
	  sprintf("M | vtcX | vtcY | vtcZ | vtxO\n") .
	  sprintf("-----------------------------\n") .
	  sprintf("x | %.2f | %.2f | %.2f | %.2f\n",
		$matrice->matrice[0][0],
		$matrice->matrice[0][1],
		$matrice->matrice[0][2],
		$matrice->matrice[0][3]) .
	  sprintf("y | %.2f | %.2f | %.2f | %.2f\n",
		$matrice->matrice[1][0],
		$matrice->matrice[1][1],
		$matrice->matrice[1][2],
		$matrice->matrice[1][3]) .
	  sprintf("z | %.2f | %.2f | %.2f | %.2f\n",
		$matrice->matrice[2][0],
		$matrice->matrice[2][1],
		$matrice->matrice[2][2],
		$matrice->matrice[2][3]) .
	  sprintf("w | %.2f | %.2f | %.2f | %.2f\n",
		$matrice->matrice[3][0],
		$matrice->matrice[3][1],
		$matrice->matrice[3][2],
		$matrice->matrice[3][3]);
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