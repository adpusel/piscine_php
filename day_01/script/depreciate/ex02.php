#!/usr/bin/php
<?PHP

$stdin = fopen("php://stdin", "r");

while (1) {
    $line;
    $last_char;

    echo "Entrez un nombre: ";

    $line = trim(fgets(STDIN));
    if (feof(STDIN) == true)
        break;

    $last_char = substr($line, -1);
    if (is_numeric($line) == false)
        echo "'$line' n'est pas un chiffre";
    else {
        echo "Le chiffre $line est ";
        if ($last_char % 2 == 0)
            echo "Pair";
        else
            echo "Impair";
    }
    echo "\n";
}

fclose($stdin);