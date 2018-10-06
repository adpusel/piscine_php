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
    "id" => hash_pass(42),
	"address" => "ponneyponny"
);

//save_new_client_in_db($client);
//$hash = get_tab_clients()[0]["id"];
//echo check_pass($hash, 42) ? "true" : "false";

//var_dump(get_tab_clients()[0]["id"]);

/*------------------------------------*\
    test rajouter 
\*------------------------------------*/

