<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 9/26/18
 * Time: 4:20 PM
 */

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

$a = "<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title=\"un lien\">Ceci est un lien</a>
<br /> sadkhfaskdfh askjdfhkasfhdh sadfhasdfh<a href=http://www.riven.com> Et ca aussi <img src=wrong.image title=\"et encore ca\"></a>
</body></html>";

$tab = array();
preg_match_all("/href=.*<\/a/", $a, $tab);
print_r($tab);



//function get_the_link_lower_case($line)
//{
//    echo explode("<a", $a);
//     change link and
//}