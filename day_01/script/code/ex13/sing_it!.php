#!/usr/bin/php
<?PHP
if ($argc == 2)
{
    if ($argv[1] == "mais pourquoi cette demo ?")
        echo "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n";
    else if ($argv[1] == "mais pourquoi cette chanson ?")
        echo "Parce que Kwame a des enfants\n";
    else if ($argv[1] == "vraiment ?")
    {
        if (rand(0, 1) == 0)
            echo "Nan c'est parce que il en faut peu pour etre heureux \n";
        else
            echo "Oui il a vraiment des enfants\n";
    }
}