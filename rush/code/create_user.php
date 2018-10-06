<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 8:04 PM
 */

// TODO : set le panier ici de la session au client s'il se log
require_once "header.php";

if (is_sub() && ($_POST["passwd"] !== '') && $_POST["login"] !== '')
{
  	//
  	if (get_id_client($_POST["login"]) === true)
  	  echo "l'id existe deja bollos";
  	else
	{
	  $client = ft_new_client($_POST["login"], $_POST["passwd"]);
	  save_new_client_in_db($client);
	}
  	// inscription et redirection

}
else
  echo "manque un truc mec\n";
var_dump($_SESSION);
var_dump($_POST);
?>


<div class="log">
<p>INSCRIPTION</p>
  <form
	action=""
	method="post">
	log <input
	  type="text"
	  name="login"> <br/>
	pass <input
	  type="text"
	  name="passwd"> <br/>
	<input
	  type="submit"
	  value="ok"
	  name="submit">

  </form>

</div>