<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/7/18
 * Time: 7:42 PM
 */
require_once "header.php";

// check si l'user est bien logger en mode admin


// un tab avec les articlet ==> case pour les cat de l'article


// un tab avec les objet, mettre objet dans cat
// add, et


// function qui me genere les tab des article

// une function qui me genere les panier// putain c;est les template html cette merde !! :(
// je fais un gros bouton pour enregister ce que fais le mec

$tab_products = get_tab_products();
$tab_cat = get_tab("cat");

var_dump($_POST);

if (isset($_POST["change_product"]))
{
//  var_dump($tab_products);

  change_product($_POST["change_product"], [
	  "title" => $_POST("title"),
	  "price" => $_POST("price")
	]
  );
  var_dump(get_tab("cat"));
}


?>

<?php foreach ($tab_products as $key_prod => $value_prod): ?>
    <form
            method="post">
        <label for=''>name </label><input
                type='text'
                name='title'
                value='<?= $value_prod["title"] ?>'>
        <label for=''>prix </label><input
                type='text'
                name='price'
                value='<?= $value_prod["price"] ?> '>
        <div class="">

		  <?php foreach ($tab_cat as $key => $value): ?>
              <input
                      type="checkbox"
                      name="<?= $key ?>"
                      value="<?= $key ?>"
				<?php if (array_key_exists($key, $value_prod["cat"])): ?>
                    checked
				<?php endif; ?>

              >
              <label for=""><?= $value ?></label>
		  <?php endforeach; ?>
            change <input
                    type="submit"
                    value="<?= $key ?>"
                    name="change_product"
            >
    </form>
    <form
            method="post">
        delete <input
                type="submit"
                value="<?= $key ?>"
                name="rm_prod">
    </form>
    </div>


<?php endforeach; ?>



