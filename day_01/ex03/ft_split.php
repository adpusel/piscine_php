<?PHP

function delete_empty($value)
{
  return $value !== "";
}

function ft_split($tab)
{
    $tab = explode(" ", $tab);

  	$tab = array_filter($tab, "delete_empty");
    sort($tab);
    return $tab;
}