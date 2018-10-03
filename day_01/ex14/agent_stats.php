#!/usr/bin/php
<?PHP

// open le flux
$stdin = fopen("php://stdin", "r"); // check si pas de pb ?
if ($stdin === false)
    exit("wrong input");

// get all data
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
        }
    }
    return $average / ($nb_of_note - 1);
}

function get_average_by_user($all_data, $action)
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
        if ($action === "moyenne_user")
        echo "$name:$user_average\n";
        if ($action === "ecart_moulinette")
        echo "$name:$all\n";
    }
}

if ($argc == 2) {
    if ($argv[1] === "moyenne")
        echo get_all_average($all_data);
    else
        get_average_by_user($all_data, $argv[1]);
}


fclose($stdin);