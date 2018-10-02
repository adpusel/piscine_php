#!/usr/bin/php
<?PHP

// le document a 4 colomne, chaque colomne represente un type,
// je lis sur l'entree
// en fonction des option, je construit mon tab,
//  si moyen, je met tout dans un tab, // je split, array_filter --> si grep moulinette je prend oas, sinom ++
// je le parcours si regmolinettre, f


// est ce que je peux avoir plusieur cles valeur sur le meme dico? --> non
// est ce que je peux,

$stdin = fopen("php://stdin", "r"); // check si pas de pb ?
//
//
//function get_ob(&$tab, $key)
//{
//    if (array_key_exists($key, $tab) === false)
//        return $tab[$key];
//    else
//    {
//        $obj = new user($key);
//        array_push($tab, $obj);
//        print_r($obj);
//        return $obj;
//    }
//}
//
//while (1) {
//
//    if (feof($stdin) == true)
//        break;
//    $line = fgets($stdin);
//    $line = str_replace("\n", "", $line);
//    $line = explode(';', $line);
//    $user = get_ob($tab, $line[0]);
//    print_r($user);
//    array_push($user->note_user, $line[1]);
//}
//print_r($user);


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