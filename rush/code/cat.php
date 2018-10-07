<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/7/18
 * Time: 8:15 PM
 */


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
		<?php if (isset($product["cat"][$value])): ?>
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