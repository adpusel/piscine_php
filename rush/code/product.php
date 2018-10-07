<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/7/18
 * Time: 11:34 AM
 */
require_once "header.php";

$tab = get_tab_products();
//print_r($tab);


function has_cat($tab)
{
  foreach ($_SESSION["filter"] as $index => $item)
  {
	if (isset($tab[$item]))
	  return true;

  }
    return false;
}


?>

<?php require_once "filter.php" ?>

<div class="products">

  <?php foreach ($tab as $key => $value): ?>

  <?php if (has_cat($value["cat"])) :?>
      <div class="card">

          <div class="title">
              <p>title</p>
              <p><?= $value["title"] ?></p>
          </div>

          <div class="card_img">
              <img
                      src="rsc/logo.jpg"
                      alt="<?= $value["img"] ?>">
          </div>

          <div class="price">
              <p><?= $value["price"] ?></p>
          </div>

          <div>
              <input
                      type="submit"
                      value="OK"
                      name="lama">
          </div>

      </div>
    <?php endif;?>
  <?php endforeach; ?>


</div>
