<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 19:30
 *
 * // create
 * curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://localhost:8100/piscine_php/day_04/ex02/create.php'
 *
 *
 * curl -d login=x -d passwd=21 -d submit=OK 'http://localhost:8100/piscine_php/day_04/ex03/modif.php'
 *
 */

function ft_exit()
{
  echo "ERROR\n";
  die();
}

if ($_POST["submit"] !== 'OK')
  ft_exit();

$filename = "../private/passwd";
// get le tab
$data = file_get_contents($filename);
$tab = $data === false ? [] : unserialize($data);

$id_iser =


if ($_POST["login"] !== "" && $_POST["oldpw"] !== "")
{

  $user_hash = hash("whirlpool", $_POST["oldpw"]);
  var_dump($tab);
  if ($user_hash === $tab[$_POST["login"]])
  {
	if ($_POST["newpw"] !== "")
	{
	  $new_hash = hash("whirlpool", $_POST["newpw"]);
	  $tab[$_POST["login"]] = $new_hash;
	}
	echo "OK\n";
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
