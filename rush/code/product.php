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
if (is_sub() && ($_POST["quantity"] !== ''))
{
		add_product_panier($_POST["id"], $_POST["quantity"], $_POST["price"]);
	 header('Location: http://localhost:8080/php/rushgit/rush/code/product.php');
}

var_dump($tab);
?>

<?php require_once "filter.php" ?>

<div class="products">

  <?php foreach ($tab as $key => $value): ?>

  <?php if (has_cat($value["cat"])) :?>
      <div class="card">
			<p> <?php echo $key  ?>  </p>
		  
			<input 
				type="hidden"
				 name="id"
				 value="$key" >
<div class="title">
              <p>title</p>
              <p><?= $value["title"] ?></p>
          </div>

          <div class="card_img">
              <img
                      src="rsc/logo.jpg"
                      alt="<?= $value["img"] ?>">
		  </div>

	<form
		action=""
		method="post">
		Quantity <input
				type="text"
				name="quantity"> <br/>
	</form>

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
