<?php
/**
 * User: adpusel
 * Date: 10/10/2018
 * Time: 14:10
 */

require_once "Vector.class.php";

class matrice
{

  static public $verbose = false;


  /*------------------------------------*\
      constructor
  \*------------------------------------*/
  public function __construct($kwargs)
  {

  }


  public function __destruct()
  {

  }



  /*------------------------------------*\
      assesseur
  \*------------------------------------*/



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
echo round(cos(M_PI_4),2). "\n";
echo sin(M_PI_4). "\n";