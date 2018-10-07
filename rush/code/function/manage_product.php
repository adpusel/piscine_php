<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/7/18
 * Time: 2:57 PM
 */

require_once "manage_db.php";
require_once "install.php";


function get_tab_products()
{
  return (
  get_tab("products")
  );
}

function save_tab_products($tab)
{
  return (
  save_tab("products", $tab)
  );
}

function add_product_db($product)
{
  $product_tab = get_tab_products();
  array_push($product_tab, $product);
  save_tab_products($product_tab);
}

function get_id_product($tile)
{
  $product_tab = get_tab_products();

  foreach ($product_tab as $key => $value)
  {
	if ($value["title"] === $tile)
	    return $key;
  }
  return;
}

function rm_cat_product($id, $cat)
{
  $tab = get_tab_products();

  // je fais un key value
  unset($tab[$id]["cat"][$cat]);
  save_tab_products($tab);
}

function rm_product($id)
{
  $tab = get_tab_products();

  $tab[$id] = NULL;
  save_tab_products($tab);
}

function add_cat_product($id, $cat)
{
  $tab = get_tab_products();

  // je fais un key value
  $tab[$id]["cat"][$cat] = "ok";
  save_tab_products($tab);
}


/*------------------------------------*\
    manage cat product
\*------------------------------------*/
function add_cat($name)
{
	$tab = get_tab("cat");
	array_push($tab, $name);
	save_tab("cat", $tab);
    return;
}

function get_id_cat($name)
{
  $tab = get_tab("cat");
  foreach ($tab as $index => $item)
  {
	if ($item == $name)
	  return $index;
  }
}

function rm_cat($name)
{
  $tab = get_tab("cat");
  $tab[get_id_cat($name)] = NULL;
  save_tab("cat", $tab);
}

$p_test = [
  "flute" => "asdfaf",
  "cat" => [
    "lala"
  ]
];


//var_dump(get_tab_products());
//add_product_db(["adsfadsdddhdsaflashflkasdhflkafhahflkahflkashfaksdfhsakfhaklsfhd"]);
//add_cat_product(2, 5);
//rm_cat_product(2, 5);
//rm_product(2);


