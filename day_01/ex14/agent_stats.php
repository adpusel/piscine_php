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


function get_all_average($tab)
{
    $average = 0;
    $nb_of_note = 0;
    foreach ($tab as $item) {
        if ("moulinette" !== $item[2] && $item[1] !== "") {
            $average += intval($item[1]);
            $nb_of_note++;
//            echo $item[2]."\n";
        }
    }
    return $average / ($nb_of_note - 1);
}

//print_r($all_data);
// reflechir a comment le faire en regex
//echo get_all_average($all_data);


function get_average_by_user($all_data)
{
    $user_tab = array();

    // je genere un tab avec tout les gens corriger dedans
    foreach ($all_data as $key => $item) {
        if ($key > 1) {
            $user_tab[$item[0]] = ["mate" => [], "mou" => []];
        }
    }

    // trie en fonction de la key
    ksort($user_tab);

    // je fill avec les moyennes des gens
    foreach ($all_data as $index => $line) {
        if ($index > 1) {
            if ($line[1] !== '' && $line[2] !== "moulinette")
                array_push($user_tab[$line[0]]["mate"], $line[1]);
            if ($line[1] !== '' && $line[2] === "moulinette")
                array_push($user_tab[$line[0]]["mou"], $line[1]);
        }
    }

    // build les moyenne des gens
    foreach ($user_tab as $name => $user) {
        $user_average = 0;
        $mou_average = 0;

        // moyenne des mate
        foreach ($user["mate"] as $mate_note) {
            $user_average += intval($mate_note);
        }

        // moyenn moulinnette
        foreach ($user["mou"] as $item) {
            $mou_average += intval($item);
        }

        $user_average = $user_average / (count($user["mate"]));
        $mou_average = $mou_average / count($user["mou"]);
        $user["mate_moy"] = $user_average;
        $all = $user_average - $mou_average;
//        echo "$name $user_average\n";
//        echo "$name $all\n";
        $user_tab[$name]["moy"] = $user_average;
        $user_tab[$name]["diff"] = $all;
    }
}

get_average_by_user($all_data);

fclose($stdin);