<?php
/**
 * User: adpusel
 * Date: 06/10/2018
 * Time: 08:14
 */

require_once "manage_db.php";

/**
 * client :
 *    panier: [ les id des produit]
 *    mdp
 *    droit
 * 	  commande [les commande passer]
 *
 *    est ce que je fais des tab comme sql ? la je fais la meme chose, le truc cool c'est que je peux avoir les joint et ca c'est
 * le feu mais, je m'en fiche je fais ca comme un gros bourin et ca c'est cool :)
 */

function get_tab_clients()
{
  return (
    get_tab("clients")
  );
}

function save_tab_clients($tab)
{
  return (
  save_tab("clients", $tab)
  );
}

function save_new_client_in_db($client)
{
	$client_tab = get_tab_clients();
	array_push($client_tab, $client);
	save_tab_clients($client_tab);
}
