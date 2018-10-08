<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/7/18
 * Time: 4:23 PM
 */

require_once "function/manage_product.php";
//session_destroy();
session_start();

$tab_cat = get_tab("cat");


// mettre dans session les filtre cliquer et faire linker avec la db

if ($_POST["submit"] === "filter")
{
  $_SESSION["filter"] = [];
  foreach ($_POST as $item)
  {
	if ($item !== "filter")
	  $_SESSION["filter"][$item] = intval($item);

  }

  var_dump($_SESSION);
  echo "<bn>\n";
  variant_neg($_GET);

  header("Location product.php");
//  exit();
}


var_dump($_SESSION);

?>

<div class="filter">

    <form
            action="filter.php"
            method="post">
	  <?php foreach ($tab_cat as $key => $value): ?>
          <input
                  type="checkbox"
                  name="<?= $key ?>"
                  value="<?= $key ?>"
			<?php if (isset($_SESSION["filter"][$key])): ?>
                checked
			<?php endif; ?>

          >
          <label for=""><?= $value ?></label>
	  <?php endforeach; ?>
        <input
                type="submit"
                value="filter"
                name="submit">
    </form>
</div>
