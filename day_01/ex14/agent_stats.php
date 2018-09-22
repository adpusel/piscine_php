#!/usr/bin/php
<?PHP

class user
{
    public $name;
    public $note_user;
    public $nb_note_user;
    public $note_moulinette;
    public $nb_note_moulinette;

    function __construct()
    {
        $this->note_user = array();
        $this->note_moulinette = array();
    }
}

function add_key($s, &$tab)
{
    $s = explode(':', $s);
    $tab[$s[0]] = $s[1];
}


// plusieur tab
//  toute les notes + user
//  note et user
//  user et note pas moulinett
//  user et note moulinette

function read()
{

    return;
}
$tab = array();
$stdin = fopen("php://stdin", "r");


function get_ob(&$tab, $key)
{
    if (array_key_exists($key, $tab) === false)
        return $tab[$key];
    else
    {
        $obj = new user($key);
        array_push($tab, $obj);
        print_r($obj);
        return $obj;
    }
}

while (1) {

    if (feof($stdin) == true)
        break;
    $line = fgets($stdin);
    $line = str_replace("\n", "", $line);
    $line = explode(';', $line);
    $user = get_ob($tab, $line[0]);
    print_r($user);
    array_push($user->note_user, $line[1]);
}
print_r($user);


//if ($argc >= 2) {
//    $tab = array();
//    foreach ($argv as $key => $item) {
//        if ($key > 1)
//            add_key($argv[$key], $tab);
//    }
//
////    if (array_key_exists($argv[1], $tab)) {
////        echo $tab[$argv[1]];
////        echo "\n";
////    }
//}

?>