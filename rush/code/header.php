<?PHP

 require_once "function/manage_client.php";
require_once "function/manage_db.php";
require_once "function/manage_panier.php";
require_once "function/manage_product.php";
require_once "function/helper.php";
session_start();

// dans session je met mon user ==> faire la page connection pour commencer
// a partir de la je fais les request et faire aussi les redirections

var_dump($_SESSION);

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
	  <?php
	  if (isset($_SESSION["user"]) === false)
		echo ' <a href="create_user.php">inscription</a>';
	  ?>
    </div>


    <div>
		  <?php
		  if (isset($_SESSION["user"]))
			echo ' <a href="page/logout.php">logout</a>';
		  else
			echo ' <a href="login.php">login</a>';
		  ?>
        </a>
    </div>

    <div>
	  <?php
	  if (isset($_SESSION["user"]))
		echo ' <a href="page/logout.php">modif data user</a>';
	  ?>
        </a>
    </div>


</div>
