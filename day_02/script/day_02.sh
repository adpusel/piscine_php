#!/usr/bin/env bash

# une fonction pour comparer du texte
# comment check si les fonctions sont bien celle qui sont authoriser ?

#clean tout les fichiers a la fin
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

    #test result
    php one_more_time.php "lundi 05 septembre 2045"         | cat -e
    php one_more_time.php "Lundi 20 Septembre 2000"         | cat -e

    php one_more_time.php "mardi 30 octobre 0021"           | cat -e
    php one_more_time.php "Mardi 31 Octobre 1920"           | cat -e

    php one_more_time.php "mercredi 20 novembre 0056"       | cat -e
    php one_more_time.php "Mercredi 21 Novembre 2200"       | cat -e

    php one_more_time.php "jeudi 10 decembre"          | cat -e
    php one_more_time.php "Jeudi 11 Decembre"          | cat -e

    php one_more_time.php "vendredi 01 janvier"       | cat -e
    php one_more_time.php "Vendredi 02 Janvier"       | cat -e

    php one_more_time.php "samedi 03 fevrier"         | cat -e
    php one_more_time.php "Samedi 04 Fevrier"         | cat -e

    php one_more_time.php "dimanche 05 mars"          | cat -e
    php one_more_time.php "Dimanche 06 Mars"          | cat -e

    php one_more_time.php "lundi 07 avril"         | cat -e
    php one_more_time.php "Lundi 08 Avril"         | cat -e

    php one_more_time.php "lundi 09 mai"         | cat -e
    php one_more_time.php "Lundi 10 Mai"         | cat -e

    php one_more_time.php "lundi 11 juin"         | cat -e
    php one_more_time.php "Lundi 12 Juin"         | cat -e

    php one_more_time.php "lundi 13 juillet"         | cat -e
    php one_more_time.php "Lundi 19 Juillet"         | cat -e

    php one_more_time.php "lundi 29 aout"         | cat -e
    php one_more_time.php "Lundi 25 Aout"         | cat -e

    php one_more_time.php "lundi 21 aout"         | cat -e
    php one_more_time.php "Lundi 01 aout"         | cat -e







#    ft_check_diff mlx ad_src    ex_01_test_same_outpout

    #test size prog

    end
}
ex_01


#*------------------------------------*\
#    ex 02
#*------------------------------------*/
function ex_02
{
    cd ex02

    #test result
    ft_check_diff_EFO oddeven ad_src ad_test_text ex_02_same_output

    #dernier check
    ./oddeven.php

    end
}


#*------------------------------------*\
#    ex 03
#*------------------------------------*/
function ex_03
{
    cd ex03

    #build my main
    cat ad_main.php | tail -n +4 > tmp
    { echo '<?PHP  include "ad_src.php"; '; cat tmp; } > ad_main_test.php
    rm tmp

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

    php aff_param.php | cat -e > your
    php ad_src.php | cat -e > my

    php aff_param.php 55 22 | cat -e >> your
    php ad_src.php 55 22 | cat -e >> my

    php aff_param.php 55 22 a g aann  dafsd gqerg w qjfq eqwfqwenvy qlklqwjr hqwhr cxqew ewh cqewcr teqrkhchrtecqekwhrx qwliukcr hqwilu | cat -e >> your
    php ad_src.php 55 22 a g aann  dafsd gqerg w qjfq eqwfqwenvy qlklqwjr hqwhr cxqew ewh cqewcr teqrkhchrtecqekwhrx qwliukcr hqwilu | cat -e >> my

    php aff_param.php super super super | cat -e >> your
    php ad_src.php super super super | cat -e >> my

    php aff_param.php "super super super" | cat -e >> your
    php ad_src.php "super super super" | cat -e >> my

    diff_param ex_04_same_output

    end
}


#*------------------------------------*\
#    ex 05
#*------------------------------------*/
function ex_05
{
    cd ex05

    touch my your

    php epur_str.php | cat -e > your
    php ad_src.php | cat -e > my

    php epur_str.php "" | cat -e >> your
    php ad_src.php "" | cat -e >> my

    php epur_str.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e >> your
    php ad_src.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e >> my

    php epur_str.php "    55    " | cat -e >> your
    php ad_src.php "    55    " | cat -e >> my

    php epur_str.php "    " | cat -e >> your
    php ad_src.php "    "| cat -e >> my

    php epur_str.php "  a a  " | cat -e >> your
    php ad_src.php "    a  a  "| cat -e >> my

    diff_param ex_05_same_output

    end
}

##*------------------------------------*\
##    ex 06
##*------------------------------------*/
function ex_06
{
    cd ex06

    php ssap.php | cat -e > your
    php ad_src.php | cat -e > my

    php ssap.php "" | cat -e >> your
    php ad_src.php "" | cat -e >> my

    php ssap.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e >> your
    php ad_src.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e >> my

    php ssap.php foo bar "yo man" "A moi compte, deux mots" Xibul | cat -e >> your
    php ad_src.php foo bar "yo man" "A moi compte, deux mots" Xibul | cat -e >> my

    php ssap.php "    " | cat -e >> your
    php ad_src.php "    "| cat -e >> my

    php ssap.php "  a a  " | cat -e >> your
    php ad_src.php "    a  a  "| cat -e >> my

    diff_param ex_06_same_output

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
