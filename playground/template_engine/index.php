<?php
/**
 * User: adpusel
 * Date: 08/10/2018
 * Time: 17:33
 */


$tab = [
  [
	"title" => "super",
	"url" => "http://apple.com",
	"site" => "fuck"
  ],
  [
	"title" => "super_1",
	"url" => "http://apple.com",
	"site" => "fuck_1"
  ]
];

var_dump($tab);


/** * A templating engine * * PHP version 5 * * LICENSE: This source file is subject to the MIT License, available at * http://www.opensource.org/licenses/mit-license.html * * @author Jason
 * Lengstorf <jason.lengstorf@copterlabs.com> * @copyright 2010 Copter Labs * @license http://www.opensource.org/licenses/mit-license.html MIT License
 */
class Template
{

  //TODO: Define a class property to store the template
  public $template_file;

  //TODO: Define a class property to store the entries
  public $entries = array();

  //TODO: Write a public method to output the result of the templating engine
  private $_template;

  //TODO: Write a private method to load the template
  private function _load_template()
  {
	$template_file = $this->template_file;
	if (file_exists($template_file) && is_readable($template_file))
	{
	  $path = $template_file;
	}

  }
	//TODO: Write a private method to parse the template

	//TODO: Write a static method to replace the template tags with entry data

	//TODO: Write a private currying function to facilitate tag replacement


  }


?>