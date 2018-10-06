<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 1:43 PM
 */

require_once "manage_client.php";

// reset la database a chaque echange avec le clients
shell_exec("rm -rf private");
require_once "install.php";
require_once "manage_panier.php";


/*------------------------------------*\
    test le routor de get_tab
\*------------------------------------*/
//$tab = get_tab("clients");
//var_dump($tab);

/*------------------------------------*\
    test retour de save_tab
\*------------------------------------*/
//$tab = array("super" => "machant");
//save_tab("clients", $tab);
//$tab = get_tab("clients");
//var_dump($tab);


/*------------------------------------*\
    save client
\*------------------------------------*/
//save_new_client_in_db(["1" => "lalal"]);
//var_dump(get_tab_clients());


/*------------------------------------*\
    test hash client
\*------------------------------------*/
$client = array(
  	"login" => "ad_0",
  	"hash" => hash_pass(42),
  	"panier" => []
);

$client_1 = array(
  "login" => "ad_1",
  "hash" => hash_pass(42),
  "address" => "ponneyponny"
);

$client_2 = array(
  "login" => "ad_2",
  "hash" => hash_pass(42),
  "address" => "ponneyponny"
);

save_new_client_in_db($client);
save_new_client_in_db($client_1);
save_new_client_in_db($client_2);
//$hash = get_tab_clients()[0]["id"];
//echo check_pass($hash, 42) ? "true" : "false";

//delete_user(2);
//
//var_dump(get_tab_clients());
//echo auth("ad", 2);


// rajouter un truc dans le panier
add_product_panier(22, 45, 1);
add_product_panier(222, 8, 1);

remove_product_panier(22, 1);
var_dump(get_tab_clients()[1]);




/*------------------------------------*\
    test rajouter 
\*------------------------------------*/

