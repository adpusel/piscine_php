<?php
/**
 * User: adpusel
 * Date: 09/10/2018
 * Time: 17:06
 */


/*
 * 	-- la class dois posserder 3 attribut public entier : red, green, blue
 *	-- le constructeur accept 2 type d'argument les deux doivent etre set par un
 * 	   je dois check les valeurs,  || sinon set les valeur une par une
 * 	   le rgb se parse avec ;
 *
 * */

class Color
{
  static public $verbose = false;

  public $red = 0;
  public $green = 0;
  public $blue = 0;

  /*------------------------------------*\
      construct
  \*------------------------------------*/
  public function __construct(array $kwargs)
  {
	if (array_key_exists("rgb", $kwargs))
	{
	  $nb = $kwargs["rgb"];
	  $kwargs = array(
		"red"   => $nb >> 16,
		"green" => $nb >> 8,
		"blue"  => $nb
	  );
	}
	$this->_setColor($kwargs);
	if (self::$verbose === true)
	  $this->_print_verbose(" constructed.");
  }

  public function __destruct()
  {
	if (self::$verbose === true)
	  $this->_print_verbose(" destructed.");
  }

  public function add(Color $new_instace)
  {
	return new Color([
	  "red"   => $this->red + $new_instace->red,
	  "green" => $this->green + $new_instace->green,
	  "blue"  => $this->blue + $new_instace->blue]);
  }

  public function sub(Color $new_instace)
  {
	return new Color([
	  "red"   => $this->red - $new_instace->red,
	  "green" => $this->green - $new_instace->green,
	  "blue"  => $this->blue - $new_instace->blue]);
  }

  public function mult($nb)
  {
	return new Color([
	  "red"   => ($this->red * $nb),
	  "green" => ($this->green * $nb),
	  "blue"  => ($this->blue * $nb)]);
  }


  /*------------------------------------*\
      setter
  \*------------------------------------*/
  private function _setColor($kwargs)
  {
	$color_tab = ["red", "green", "blue"];

	foreach ($color_tab as $color)
	{
	  if (array_key_exists($color, $kwargs))
	  {
		$this->$color = intval($kwargs[$color]) & 0xFF;
	  }
	}
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
	printf("Color( red: %3d, green: %3d, blue: %3d )",
	  $this->red, $this->green, $this->blue);
	echo $str !== '' ? $str : "";
	echo "\n";
  }

  /*------------------------------------*\
      doc and string
  \*------------------------------------*/
  static function doc()
  {
	print "\n";
    print file_get_contents("Color.doc.txt");
	print "\n";
  }

  public function __toString()
  {
	return sprintf("Color( red: %3d, green: %3d, blue: %3d )",
	  $this->red, $this->green, $this->blue);
  }

}