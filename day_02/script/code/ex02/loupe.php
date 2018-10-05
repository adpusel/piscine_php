<?php
///**
// * Created by PhpStorm.
// * User: adpusel
// * Date: 9/26/18
// * Time: 4:20 PM
// */
//
// cherche href avec la regex et get tout le rext derriere, ==> href a </a>

if ($argc !== 2)
    exit;

$file = file_get_contents($argv[1]);
if ($file === false)
    exit;

function upper($text)
{
    return (strtoupper($text[0]));
}

$file = preg_replace_callback(
    '/<a.*?<\/a>/is',
    function ($text) {
        return preg_replace_callback("/>[^(<\/)]+/", 'upper', $text[0]);
    },
    $file);
$file = preg_replace_callback('/title="\K[^"]+/', function ($text) {
    return(strtoupper($text[0]));
}, $file);

print $file;
