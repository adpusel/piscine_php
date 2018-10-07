<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 8:04 PM
 */

// TODO : set le panier ici de la session au client s'il se log
require_once "header.php";

// TODO : corriger le truc de l'id
if (is_sub() && ($_POST["passwd"] !== '') && $_POST["login"] !== '')
{
  if (get_id_client($_POST["login"]) !== FALSE)
	echo "Identifiant indisponible";
  else
		put_new_data_client();
  // inscription et redirection
}
else
  echo "manque un truc mec\n";
//var_dump($_SESSION);
//var_dump($_POST);
?>


<div class="log">
    <p>INSCRIPTION</p>
    <form
            action=""
            method="post">
        Identifiant <input
                type="text"
                name="login"> <br/>
        Mot de passe <input
                type="text"
                name="passwd"> <br/>
        <input
                type="submit"
                value="ok"
                name="submit">
    </form>

</div>
