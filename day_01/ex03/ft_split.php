#!/usr/bin/php
<?PHP

function ft_split($str)
{
    $str = explode(' ', $str);

    foreach ($str as $key => $value)
    {
        if (empty($value) && $value != "0")
            unset($str[$key]);
    }
    sort($str);
    return $str;
}
?>