<?php
/**
 * User: adpusel
 * Date: 04/10/2018
 * Time: 21:12
 */

function ft_exit()
{
  echo "ERROR\n";
  die();
}

if ($_POST["submit"] !== 'OK')
  ft_exit();


if ($_SERVER["PHP_AUTH_USER"] === 'zaz' && $_SERVER["PHP_AUTH_PW"] === 'jaimelespetitsponeys')
{
  $sting_file = base64_encode(file_get_contents("../img/42.png"));
  echo '<html><body>Bonjour Zaz<br />';
  echo '<img src="data:image/png;base64,'.$sting_file.'"';
  echo '</body></html>';
}

else
{
  header('HTTP/1.0 401 Unauthorized');
  header("WWW-Authenticate: Basic realm=''Espace membres''");
  echo '<html><body>Cette zone est accessible uniquement aux membres du site</body></html>';
}
//  curl --user zaz:jaimelespetitsponeys http://127.0.0.1:8100/piscine_php/day_03/ex06/members_only.php
//  curl -v --user root:root http://127.0.0.1:8100/piscine_php/day_03/ex06/members_only.php