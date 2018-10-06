<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 4:39 PM
 */

// ajoute dans le panier du client ce qu'il voulais
// prends un client, et modifie sa valeur dans le panier du client, bien faire les cf

// todo si le produit est supprimer comment on gere ca au niveau des commandes ? //  les commandes sont ecrite en dur,
// pour les product je ne supprinme pas les entree ?

require_once "manage_client.php";


/*
 * les product panier
 * 		[
 * 			"id" -> quantiter
 * 		]
 * 	les pannier
 * 		[
 * 			product ==
 * 		]
 *
 *
 * */

function add_product_panier($id_product, $quantity, $id_user)
{
  	$tab = get_tab_clients();
  	$user = $tab[$id_user];
  	$user["pannier"][$id_product] = $quantity;
  	$tab[$id_user] = $user;
  	save_tab_clients($tab);
}


function remove_product_panier($id_product, $id_user)
{
  $tab = get_tab_clients();
  $user = $tab[$id_user];
  unset($user["pannier"][$id_product]);
  $tab[$id_user] = $user;
  save_tab_clients($tab);
}