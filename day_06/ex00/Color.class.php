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
	$this->setColor($kwargs);
	if (self::$verbose === true)
	  $this->print_verbose(" constructed.");
  }

  public function __destruct()
  {
//	if (self::$verbose === true)
//	  $this->print_verbose(" destructed.");
  }

  public function add(Color $new_instace)
  {
	return new Color([
	  "red"   => ($this->red + $new_instace->red),
	  "green" => ($this->green + $new_instace->green),
	  "blue"  => ($this->blue + $new_instace->blue)]);
  }


  /*------------------------------------*\
      setter
  \*------------------------------------*/
  private function setColor($kwargs)
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

  private function print_verbose($str)
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
	$file = file_get_contents("Color.doc.txt");
	echo "$file\n";
  }

  public function __toString()
  {
	return $this->print_verbose("");
  }

}

// LES TEST
//$in_1 = new Color([]);
//
//$in_1::setVerbose(true);
//$in_1::doc();
// test mode verbose


