<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 8:04 PM
 */


require_once "header.php";

if (is_sub() && ($_POST["passwd"] !== '') && $_POST["login"] !== '')
{
  	//
  	if (get_id_client($_POST["login"]) === true)
  	  echo "l'id existe deja bollos";
  	else
	{
	  
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