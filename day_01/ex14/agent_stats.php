#!/usr/bin/php
<?PHP

$d;
// le document a 4 colomne, chaque colomne represente un type,
// je lis sur l'entree
// en fonction des option, je construit mon tab,
//  si moyen, je met tout dans un tab, // je split, array_filter --> si grep moulinette je prend oas, sinom ++
// je le parcours si regmolinettre, f


// je fais un arret filter qui retourn selement les truc avec le bon id
$stdin = fopen("php://stdin", "r"); // check si pas de pb ?
if ($stdin === false)
    exit("wrong input");

$all_data = array();
while (1) {
    $line = trim(fgets(STDIN));
    if (feof(STDIN) == true)
        break;
    array_push($all_data, explode(";", $line));
}


// j'ai ma variable qui va get les nom si la regex moulinette est fausse

function get_all_average($tab)
{
    $average = 0;
    $nb_of_note = 0;
    foreach ($tab as $item) {
        if (preg_match("/moulinette/", $item[2]) === 0 && $item[1] !== "")
        {
            $average += intval($item[1]);
            $nb_of_note++;
//            echo $item[2]."\n";
        }
    }
    return $average / ($nb_of_note - 1);
}

print_r($all_data);
echo get_all_average($all_data);
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

fclose($stdin);