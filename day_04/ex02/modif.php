<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 19:30
 *
 * // create
  rm /Users/adpusel/code/42/piscine_php/day_04/private/passwd
   curl -d login=x -d passwd=21 -d submit=OK 'http://localhost:8100/piscine_php/day_04/ex02/create.php'
 *
 *
 * // ok car exist
 *  curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost:8100/piscine_php/day_04/ex03/modif.php'
 *
 * // si pas de new mdp
 * curl -d login=x -d oldpw=42 -d newpw= -d submit=OK 'http://localhost:8100/piscine_php/day_04/ex03/modif.php'
 *
 */
/*------------------------------------*\
   manage tab
\*------------------------------------*/
function get_tab($filename)
{
  $data = file_get_contents($filename);
  return ($data === false ? [] : unserialize($data));
}

function save_tab($filename, $tab)
{
  $filename = $filename;
  $tab = serialize($tab);
  return (file_put_contents($filename, $tab));
}

/*------------------------------------*\
    manage input
\*------------------------------------*/
function ft_exit()
{
  echo "ERROR\n";
  die();
}

function check_submit()
{
  if ($_POST["submit"] !== 'OK')
  {
	ft_exit();
  }
}

/*------------------------------------*\
    manage user
\*------------------------------------*/
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

// true if good password
function check_pass($hash, $name_pass)
{
  $pass_hash = $user_hash = hash("whirlpool", $_POST[$name_pass]);
  return $hash === $pass_hash ? true : false;
}

function change_passe($tab, $id_user, $new_pass)
{
  $tab[$id_user]["passwd"] = hash("whirlpool", $new_pass);
}

function ft_is_set($tab, $key)
{
  return ($tab[$key] !== NULL);
}

function ft_add_user($tab)
{
  $pass = hash("whirlpool", $_POST["passwd"]);

  array_push($tab, [
	"login" => $_POST["login"], "passwd" => $pass
  ]);
  return $tab;
}

/*------------------------------------*\
    data
\*------------------------------------*/
$filename = "../private/passwd";

/*------------------------------------*\
    //////////////////////////////////////////////////////////////////////////////
\*------------------------------------*/

check_submit();

// get le tab
$tab = get_tab($filename);

// check si good user
$user_id = get_id_user($tab);
if ($user_id === false)
{
  ft_exit();
}

// check si good pass
if (check_pass($tab[$user_id]["passwd"], "oldpw") !== true)
{
  ft_exit();
}

if (ft_is_set($_POST, "newpw"))
{
  change_passe($tab, $user_id, $_POST["newpw"]);
}
else
  ft_exit();

save_tab($filename, $tab);























