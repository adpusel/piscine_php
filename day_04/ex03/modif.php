<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 19:30
 */

function ft_exit()
{
  echo "ERROR\n";
  die();
}

//if ($_POST["submit"] !== 'OK')
//  ft_exit();


$filename = "../private/passwd";
// get le tab
$data = file_get_contents($filename);
$tab = $data === false ? [] : unserialize($data);


if ($_POST["login"] !== "" && $_POST["oldpw"] !== "" && $_POST["newpw"])
{
  var_dump($_POST);

  $user_hash = hash("whirlpool", $_POST["oldpw"]);
  if ($user_hash === $tab[$_POST["login"]])
  {
    $new_hash = hash("whirlpool", $_POST["newpw"]);
	$tab[$_POST["login"]] = $new_hash;
  }
  else
	ft_exit();

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