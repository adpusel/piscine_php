<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 6:34 PM
 */

require_once "header.php";

if (is_sub())
{
  if (auth($_POST["login"], $_POST["passwd"], $id))
  {
      $_SESSION["user"] = $id;
      echo "you are connected\n";
  }
  else
	echo "wrong pass man\n";
}

?>


<div class="log">
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
