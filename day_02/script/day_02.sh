#!/usr/bin/env bash

# une fonction pour comparer du texte
# comment check si les fonctions sont bien celle qui sont authoriser ?

#importe les function
. "function.sh"

cd .. ;delete_trace; cd script;

copie_all code


cd ..

##*------------------------------------*\
##    ex 00
##*------------------------------------*/
function ex_00
{
    cd ex00;

    #test
    php another_world.php   | cat -e >> your
    ###php another_world.php                    | cat -e >> my

    php another_world.php   "		ss eed   " | cat -e >> your
    ###php ad_src.php       "		ss eed" | cat -e >> my

    php another_world.php   "		ss eed   " | cat -e >> your
    ###php ad_src.php "		ss eed" | cat -e >> my

    php another_world.php   "		ss		 e		e	d		" | cat -e >> your
    ###php ad_src.php "		ss		 e		e	d		" | cat -e >> my

    php another_world.php   "adsf	 	ss	 	 e	 asdf	e	 d	asdfasdf 	asdf" | cat -e >> your
    ###php ad_src.php "adsf	 	ss	 	 e	 asdf	e	 d	asdfasdf 	asdf" | cat -e >> my

    #diff
    diff_param ex_00_same_output

    end
}

#ex_00
#*------------------------------------*\
#    ex 01
#*------------------------------------*/
function ex_01
{
    cd ex01
    IFS=$'\n'
    array_good=(
            "lundi 05 septembre 1753 00:49:99"
            "Lundi 20 Septembre 2000 12:00:00"

            "mardi 30 octobre 1753 12:00:00"
            "Mardi 31 Octobre 1920 12:00:44"

            "mercredi 20 novembre 1753 15:42:42"
            "Mercredi 21 Novembre 2200 15:42:42"

            "jeudi 10 decembre 1982 15:42:42"
            "Jeudi 11 Decembre 1982 15:42:42"

            "vendredi 01 janvier 1982 15:42:42"
            "Vendredi 02 Janvier 1982 15:42:42"

            "samedi 03 fevrier 1982 15:42:42"
            "Samedi 04 Fevrier 1982 15:42:42"

            "dimanche 05 mars 1982 15:42:42"
            "Dimanche 06 Mars 1982 15:42:42"

            "lundi 07 avril 1982 15:42:42"
            "Lundi 08 Avril 1982 15:42:42"

            "lundi 09 mai 1982 15:42:42"
            "Lundi 10 Mai 1982 15:42:42"

            "lundi 11 juin 1982 15:42:42"
            "Lundi 12 Juin 1982 15:42:42"

            "lundi 13 juillet 1982 15:42:42"
            "Lundi 19 Juillet 1982 15:42:42"

            "lundi 29 aout 1982 15:42:42"
            "Lundi 25 Aout 1982 15:42:42"

            "lundi 21 aout 1982 15:42:42"
            "Lundi 01 aout 1982 15:42:42"
          )


    for i in "${array_good[@]}"
    do :
        php one_more_time.php $i | cat -e
#        php one_more_time.php $i cat -e > your
    done

    array_bad=(
            "lundi 0 septembre 1753 00:59:00"
            "Lundi 20 Sepembre 2000 24:59:00"

            "mardi 30 otobre 1753 12:00:00"
            "Mardi 31 Octobe 1920 12:00:44"

            "mercredi 20 novemre 1753 15:42:42"
            "Mercredi 21 ovembre 2200 15:42:42"

            "jeudi 10 decembe 1982 15:42:42"
            "Jedi 11 Decembre 1982 15:42:42"

            "vendredi 01 janvier 198 15:42:42"
            "Vendred 02 Janvier 1982 15:42:42"

            "samedi 03 fevrier 1982 1:42:42"
            "Samedi 04 Fevrier 1982 15:42:4"

            "dimanche 05 mrs 1982 15:42:42"
            "Dmanche 06 Mars 1982 15:42:42"

            "ludi 07 avril 1982 15:42:42"
            "Lundi 08 Avil 1982 15:42:42"

            "lundi 09 mi 1982 15:42:42"
            "Lundi 10 Mai 182 15:42:42"

            "lundi 11 juin 1982 1542:42"
            "Lundi 12 Juin 1982 15:42:0"
            "Lundi 12 Juin 200 15:42:0"

            "lundi 13 juillet1982 15:42:42"
            "Lundi 19 Juillet 1982 15:0:42"

            "lundi aout 1982 15:42:42"
            "Lundi 25 Aout 1982 0:42:42"

            "Lundi  aout 01 1982 15:42:42"
            "lundi 21 aout 1982"

            "u"
            "Lundi"

            "Lundi 01 aout 1982 15:42"
            "Lundi 01 aout 1982 15:4:42"
          )

    for i in "${array_bad[@]}"
    do :
        php one_more_time.php $i | cat -e
#        php one_more_time.php $i cat -e > your
    done



#    ft_check_diff mlx ad_src    ex_01_test_same_outpout

    #test size prog

    end
}
#ex_01


#*------------------------------------*\
#    ex 02
#*------------------------------------*/
function ex_02
{
    cd ex02

    #test result
    php loupe.php t.html

    end
}
ex_02

#*------------------------------------*\
#    ex 03
#*------------------------------------*/
function ex_03
{
    cd ex03

    ft_check_diff ad_main ad_main_test ex_03_same_output

    end
}

#*------------------------------------*\
#    ex 04
#*------------------------------------*/
function ex_04
{
    cd ex04
    touch my your


    diff_param ex_04_same_output

    end
}


#*------------------------------------*\
#    ex 05
#*------------------------------------*/
function ex_05
{
    cd ex05



    diff_param ex_05_same_output

    end
}

##*------------------------------------*\
##    ex 06
##*------------------------------------*/
function ex_06
{
    cd ex06



end
}


##go
#ex_00
#ex_01
#ex_02
#ex_03
#ex_04
#ex_05
#ex_06
