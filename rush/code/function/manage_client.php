<?php
/**
 * User: adpusel
 * Date: 06/10/2018
 * Time: 08:14
 */

require_once "manage_db.php";

/**
 * client :
 *    login        == address email
 *    panier    == [ tab avec les id des produits]
 *    hash        == le hash
 *    droit        == les acces au site
 *    commande  == [ tab commandes deja passe ]
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

// todo create user
// ?

// return l'index de l'user
function get_id_user($tab)
{
  foreach ($tab as $i => $item)
  {
	if ($item["login"] === $_POST["login"])
	{
	  return ($i);
	}
  }
  return false;
}

function hash_pass($pass)
{
  return (hash("whirlpool", $pass));
}

// true if good password
function check_pass($hash, $pass)
{
  $pass_hash = hash("whirlpool", $pass);
  if ($hash === $pass_hash)
    return true;
  else
    return false;
}

function change_passe($tab, $id_user, $new_pass)
{
  $tab[$id_user]["passwd"] = hash("whirlpool", $new_pass);
  return $tab;
}

// return false si login n'existe pas
function get_id_client($login)
{
  $tab = get_tab_clients();
  foreach ($tab as $index => $item)
  {
	if ($item["login"] === $login)
	  return $index;
  }
  return false;
}

function delete_user($id)
{
  $tab = get_tab_clients();
  unset($tab[$id]);
  save_tab_clients($tab);
}

// todo si true set la session de l'utilisateur
// return l'user si il existe, je le save a chaque fois
// ensuite dans la database
/*
 * return
 * */
function auth($login, $pass, &$id)
{
  $id = get_id_client($login);
  if ($id === false)
	return (false);
  $user = get_tab_clients()[$id];
  return check_pass($user["hash"], $pass);
}


















