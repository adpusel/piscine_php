<?php
/**
 * User: adpusel
 * Date: 08/10/2018
 * Time: 18:46
 */

// open file
$file = file_get_contents("test.twig");


//print_r($file);


// parse file
// si c'est un tab ca fait ca :);




// charger les boucle php
// si je genere un new file php c'est pas bon ca
// je ne sais pas comment faire les loop


//$file = preg_replace_callback("#\{\{(.*)\}\}#", function ($ar) {
//
//  $tab = array("super" => "mager", "name" => "toto");
//
//	foreach ($tab as $key => $item)
//	{
//
//	  	if ($key === trim($ar[1]))
//		{
//		  echo "$item\n";
//		  return ($item);
//		}
//	}
//
//  //trim
////  var_dump($ar);
//}, $file);


/*------------------------------------*\

\*------------------------------------*/


$file = preg_replace_callback("#\{\{(.*)\}\}#", function ($ar) {

  $tab = array("super" => "mager", "name" => "toto");

	foreach ($tab as $key => $item)
	{

	  	if ($key === trim($ar[1]))
		{
		  echo "$item\n";
		  return ($item);
		}
	}

  //trim
//  var_dump($ar);
}, $file);




//$file = preg_replace_callback("#\{\{(.*)\}\}#", function ($ar) {
//
//  $tab = array("super" => "mager", "name" => "toto");
//
//	foreach ($tab as $key => $item)
//	{
//
//	  	if ($key === trim($ar[1]))
//		{
//		  echo "$item\n";
//		  return ($item);
//		}
//	}
//
//  //trim
////  var_dump($ar);
//}, $file);





























// si j'ai un tab de tab, comment je l'echap ?
// je check correctement mais avec quoi
// faire les template a partir du code sql s

// si j'ai un tab d'elements, je dois le faire

// get file ok
// juste faire un eco, mais avec ce truc si j'ai des injections de code comment
// je me protege ? haha !! il me faut faire plus attention
echo $file;

// je peux genere la boocle en catchant ce que j'ai dedans et en
// le faisant ensuite passer dans la seconde boucle
// if wooblr -->
// if if --> je fais le code avec le tab, tout let temps
// // pas de if pour le moment :)