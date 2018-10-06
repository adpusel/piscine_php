<?PHP

require_once "function/manage_client.php";
require_once "function/manage_panier.php";
require_once "function/helper.php";
session_start();

// dans session je met mon user ==> faire la page connection pour commencer
// a partir de la je fais les request et faire aussi les redirections

?>
<!--todo enlever ensuite-->
<link
        rel="stylesheet"
        href="main.css">


<div class="header">

    <div class="logo">
        <img
                src="rsc/logo.jpg"
                alt="">
    </div>

    <div>
        <a href="#">
            panier
        </a>
    </div>

    <div>
        <a href="#">

		  <?php
		  if (!isset($_SESSION["user"]))
			echo "logout";
		  else
			echo "login";
		  ?>
        </a>
    </div>

</div>
