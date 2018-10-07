<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/7/18
 * Time: 11:34 AM
 */
include "header.php";

$tab = get_tab_products();
var_dump($tab);

?>


<div class="products">


  <?php foreach ($tab

  as $key => $value): ?>

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
	  <?php endforeach; ?>


    </div>


</div>
