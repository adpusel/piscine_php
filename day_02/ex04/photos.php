#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/3/18
 * Time: 5:18 PM
 */


/*
 * check si c'est un link valable avant tout
 *
 * s'il y a un link dedans je fais rien, sinon je l'ajoute
 *	tant que le premier est / j'avance,
 * */
/*------------------------------------*\
	data
\*------------------------------------*/
$reg_http = "#http(s)?://#";
$valide_link =
    "/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/";

/*------------------------------------*\
    input
\*------------------------------------*/
if ($argc !== 2) {
    exit(" no arguments");
}

// check l'address
$address = $argv[1];
echo $address;
if (preg_match($valide_link, $address) === 0) {
    exit(" wrong link");
}

// get le name du directory et le make
$name_file = preg_replace($reg_http, "", $address);
if (mkdir($name_file) === false) {
    exit(" not able to create directory");
}

// dl le file
$html = file_get_contents($address);
if ($file === false) {
    exit("link not working");
}

/*------------------------------------*\
    find all image link
\*------------------------------------*/

// ==> all tab, if not http --> i put inside
preg_match_all('/<img.+src=.\K.[^"]+/', $html, $tab_link);
$tab_link = $tab_link[0];


print_r($tab_link);
foreach ($tab_link as $item) {

    // clean le devant de l'url
    while ($item[0] === '/') {
        $item = substr($item, 1);
    }

    if (preg_match("#^(https?:\/\/)#", $item) === 0)
    {
        // clean si address
        $item = preg_replace("#www[^/]+.#", "", $item);

        $item = "$address/$item";
    }

//  echo "$item\n";

    // get le file
    $file = file_get_contents($item);
    if ($file !== false) {
        $nom_file = preg_replace($reg_http, "", $item);
        $nom_file = explode('/', $nom_file);

        // set ptr to end of tab
        $nom_file = end($nom_file);
        if (file_put_contents("$name_file/$nom_file", $file) === false) {
            echo "$file --> isn't downloaded\n";
        }
        echo "$name_file/$nom_file\n";
    } else {
        echo "$file --> isn't downloaded\n";
    }
}
