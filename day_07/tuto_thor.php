<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/11/18
 * Time: 9:50 AM
 */

// dans une class, tout ce qui est prive n'est pas herite
// le protected est transmit entre les classe
// le _ est utiliser pour les protected
// le defit est de savoir comment jongler entre ces deux options
//

// la surcharge de methode ==>

// les class sont detruite en ordre inverse de leurs creation

// toute les fonctions sont des liaison qui peuvent etre static ou dynamique
// dynamique --> le link se fait a l'execution
// mais pas en php
//  a


// c'est self qui definit quel est le patent qui call la methode
// le moe cles static me permet
//class test extends papa
//{
//
//
//  // dans le constructeur
//  public function __construct()
//  {
//	// call parent method before his
//	parent::__construct();
//
//
//  }
//
//
//  // dans une fonction
//  public function surcharge()
//  {
//	parent::foo();
//	return;
//  }
//
//}



// abstact devant ma class interdit l'instation de la class
// si j'extend une class abstract je suis obliger d'overwrite ses toutes ses methodes
// cest classe oblige des comportements, se sont des interface
// l'heritage simple c'est bien mais la relation entre un voiture et un humain --> ils sont deplacable ... montre ses limites



// une interface --> que des method abstract et aucun attribut, ok pour les interface
// la class devient un interface, on met un I maj devant
// pas besoion de mettre abstact devant, elle le sont toute
// les interface sont implementer
// les interface permet de prendre du recul sur le projet :)


class A
{
  public function foo()
  {
	print "toot est la\n";
	return;
  }

  public function super()
  {
	// block cette method statiquement
	self::foo();
	return;
  }


  public function diamique()
  {
	// ce sera la methode du children qui call
	static::foo();
	return;
  }
}

class B extends A
{

  public function foo()
  {
	print "tata est pas la\n";
  }


}


$a = new A();
$b = new B();

$a->foo();
$b->foo();

$b->super();
$b->diamique();