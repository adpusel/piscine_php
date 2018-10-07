<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 10:52 AM
 */


function get_tab($name)
{
  $file = fopen("../private/$name", "r");

  while (flock($file, LOCK_EX) === false)
  {
  };

  $data = file_get_contents("../private/" . $name);

  // libère le contenu avant d'enlever le verrou
  fflush($file);

  // Enlève le verrou
  flock($file, LOCK_UN);

  fclose($file);

  if ($data !== false)
  {
	$data = unserialize($data);
  }
  return $data ? $data : [];
}

// save le tab en memoire
function save_tab($name, $tab)
{
  $file = fopen("../private/$name", "r+");

  // boucle tant que le fichier n'est pas libre
  while (flock($file, LOCK_EX) === false)
  {
  };

  // effacement du contenu
  ftruncate($file, 0);

  // converte tab in string
  $tab = serialize($tab);

  // l'ecrit dans le fichier
  fwrite($file, $tab);

  // libère le contenu avant d'enlever le verrou
  fflush($file);

  // Enlève le verrou
  flock($file, LOCK_UN);

  fclose($file);
}

