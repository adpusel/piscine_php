#!/usr/bin/php
<?PHP

$stdin = fopen("php://stdin", "r");

$end = false;
while (1) {

    echo "Entrez un nombre: ";
    $i = 0;
    $input = trim(fgets($stdin));
    if (feof($stdin) == true)
        break;
    else if (is_numeric($input) == true) {
        echo "Le chiffre $input est ";
        $test = substr($input, -1);
        if ($test % 2 == 0)
            echo "Pair";
        else
            echo "Impair";
    } else
        echo "'$input' n'est pas un chiffre";
    echo "\n";
}
?>