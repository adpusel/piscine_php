<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 20:29
 */




/*------------------------------------*\
   manage tab
\*------------------------------------*/
function get_tab()
{
  $data = file_get_contents("../private/passwd");
  return ($data === false ? [] : unserialize($data));
}

/*------------------------------------*\
    manage user
\*------------------------------------*/
// return l'index de l'user
function get_id_user($tab, $login)
{
  foreach ($tab as $i => $item)
  {
	if ($item["login"] === $login)
	{
	  return ($i);
	}
  }
  return false;
}

// true if good password
function check_pass($hash, $passwd)
{
  $pass_hash = $user_hash = hash("whirlpool", $passwd);
  return $hash === $pass_hash ? true : false;
}

function auth($login, $passwd)
{
  $tab = get_tab();

  $user_id = get_id_user($tab, $login);
  if ($user_id === false)
  {
    return (false);
  }
  if (check_pass($tab[$user_id]["passwd"], $passwd) !== true)
  {
    return (false);
  }
  return (true);
}


