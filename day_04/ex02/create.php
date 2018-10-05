<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 19:30
 *
 * curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://localhost:8100/piscine_php/day_04/ex02/create.php'
 * more /Users/adpusel/code/42/piscine_php/day_04/private/passwd
 *
 *
 */
$filename = "../private/passwd";

function ft_exit()
{
  echo "ERROR\n";
  exit();
}

//if ($_POST["submit"] !== 'OK')
//  ft_exit();


// get le tab
$data = file_get_contents($filename);

$tab = $data === false ? [] : unserialize($data);

foreach ($tab as $item)
{
  if ($item["login"] === $_POST["login"])
	ft_exit();
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
	ft_exit();
}
else
  ft_exit();

// fonction hash de php pour hash les mdp prenre sha256 ou whirpool
// je peux activer session start pour ne pas mettre session a chaque fois dans les fichier