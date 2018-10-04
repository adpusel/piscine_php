<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 19:30
 */
$filename = "../private/passwd";

// get le tab
$data = file_get_contents($filename);

$tab = $data === false ? [] : unserialize($data);

foreach ($tab as $item)
{
  if ($item["login"] === $_POST["login"])
  {
	echo "ERROR\n";
	exit();
  }
}

if ($_POST["login"] !== "" && $_POST["passwd"] !== "")
{
  $pass = hash("whirlpool", $_POST["passwd"]);
  array_push($tab, [
    "login" => $_POST["login"], "passwd" => $pass
  ]);

  $tab = serialize($tab);
  if (file_put_contents($filename, $tab))
	echo "OK\n";
  else
	echo "ERROR\n";
}
else
  echo "ERROR\n";

// fonction hash de php pour hash les mdp prenre sha256 ou whirpool
// je peux activer session start pour ne pas mettre session a chaque fois dans les fichier