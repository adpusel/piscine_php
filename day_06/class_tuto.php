<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/9/18
 * Time: 11:05 AM
 */

// PHO_EOL ==> le saut de line sur le systeme en vigor
// je ne peux pas acceder au var private sinon err fatal!!
// un underscror, la methode est private

// je viens de declarer ma class

// faire une boucle avec array key exit pour get les arguments
// je peux forcer le typage des parrametre en placant le type avant eux


// pour pouvoir faire de la surcharge, je passe un tab a php, ==> kwargs

class Exemple
{
  public function __construct(array $super)
  {
	echo "creation" . PHP_EOL;
  }

  function __destruct()
  {
	echo "destruction" . PHP_EOL;
	return;
  }

  function metho()
  {
	return;
  }

  // permet de print mon instance directement avec dans le code un print($instance)
  public function __toString()
  {
	return "test string";
  }

  public function __get($att)
  {
	echo "get_shit\n";
	return;
  }


  // permet de faire una appell a ma fonction avec $instace() --> retourne un etat particuler // sais pas a quoi ca sert
  public function __invoke()
  {

	return;
  }

  // permet de clones ma classe et par ex de ;
  function __clone()
  {

	return;
  }


  public function __set($att, $value)
  {
	echo "set_shit\n";
	return;
  }

}

$instance = new Exemple([]);

print($instance);

//
// les fonctor

//$instance->foo = "adfs";

// pour ajputer a une class, je fais la ->


// __get et __set permettent d'avoir acces a des attribut qui sont priver ou n'existe pas
// ces methode permettent de catcher les bug, et demande chelou

// faut clonenr les instanve en memoir, si je fais $instance_1 == $instance_2// ca me fait juste une faute

// je peux check de deux maniere les $intance: --> meme place memoir : === 		 || meme donner ==