<?php
///**
// * Created by PhpStorm.
// * User: adpusel
// * Date: 9/26/18
// * Time: 4:20 PM
// */
//
// cherche href avec la regex et get tout le rext derriere, ==> href a </a>

// reg 1 ==> href=.*<\/a
// reg 2 ==> title=".*"
// reg 3 ==>
// je split sur le > --> je met en maj et je remet le >
// je remet
// je split sur le title=" "
//

/*
 *  je get tout les links, je les modifie et je les remplaces
 *


*  <html><head><title>Nice page</title></head>
    <body>Hello World <a href=http://cyan.com title="un lien">Ceci est un lien</a>
 * */

// je replace ce que je viens de trouver par le meme link
// check le link :


$a = '<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title="un lien">Ceci est un lien</a><body>Hello World <a href=http://cyan.com title="un lien">Ceci est un lien</a>
<br /> sadkhfaskdfh askjdfhkasfhdh sadfhasdfh<a href=http://www.riven.com> Et ca title="suoer"; < aussi <img src=wrong.image title="et encore ca"></a>
</body></html>';

//preg_match_all("/<a\>*.href=.*<\/a\>/", $a, $tab);


// title ok
//preg_match("/title=\"\K.*\"/", $tab[0][0], $title);
//$title[0] = strtoupper($title[0]);
//$str = "title=\"$title[0]";


//print_r($link);
//print_r($tab);
//print_r($title);
//print_r($str);

//print_r(preg_replace("/href=.*>\K.*<\/a>/", $str2, $tab[0][0]));


// je les fait retourner des str plus simple, meme si utiliser des ptr serai mieux
// function qui replace le title

//function get_upper_text($input_str)
//{
//    $text = '';
//
//    preg_match("/href=.*>\K.*<\/a>/", $input_str, $text);
//    $text = substr($text, 0, -4);
//    $text = strtoupper($text);
//    $text = "$text</a";
//    return preg_replace("/title=\"\K.*\"/", $text, $input_str);
//}

//
// function qui replace le text
//function get_upper_title($input_str)
//{
//    $title = '';
//
//    preg_match("/title=\"\K.*\"/", $input_str, $title);
//    $title = strtoupper($title[0]);
//    $title = "title=\"$title[0]";
//    return preg_replace("/title=\"\K.*\"/", $title, $input_str);
//}

//$test = get_upper_title($tab[0][0]);
//$test = get_upper_text($test);
//print_r($test);

// bien check si je suis dans une balise html || ne pas prendre de debut de le regex ca c'est good :)
// la fonction de minh ne marche pas
// i -> casse insenssible
// s -> le . replace aussi le \n
// [^] ==> tout sauf ce char :)
// \K -> pas prendre le premier

//$out = preg_replace_callback(
////  '/title=\"\K(.*?)"/is',
//  '/title=\"\K[^"]*/is',
//  function ($m) {
//	static $id = 0;
//	$id++;
//	return strtoupper($m[0]);
//  },
//  $a);

// <a.*>.*< mettre ca en maj

//// si je le met pas check si bien un a avant pour pas que ce bug
//// todo keep en premier le <a || faire attention, comment ce truc va finir ?
$out = preg_replace_callback(
//  '/href=[^>]*\K.*\/a>/is',
  '/(<a.*>)\K(.*<)/is',
//  '/\b(?!ignoreme|ignoreyou)\b\S+/is',
  function ($m) {
	print_r($m);
//    return strtoupper($m[0]);
  },
  $a);


// la reg est ok mec !!!!
<a[^>]*.\K[^<]*
///////////////////////////////////////////////////////



echo $out;


//function get_the_link_lower_case($line)
//{
//    echo explode("<a", $a);
//     change link and
//}


//
if ($argc > 1)
{
    $file = file_get_contents("$argv[1]");
    $file = preg_replace('/<a .+?<\/a>/sei', 'strtoupper("$0")', $file);
    $file = preg_replace('/<.+?>/sei', 'strtolower("$0")', $file);
    $file = preg_replace('/(?<=title=["\'])[^"^\']+/sei', 'strtoupper("$0")', $file);
    print($file);
}

//