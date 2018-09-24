#!/usr/bin/env bash

# une fonction pour comparer du texte
# comment check si les fonctions sont bien celle qui sont authoriser ?

#clean tout les fichiers a la fin
. "function.sh"

cd ..
delete_trace;

cd script
copie_all code


cd ..

##*------------------------------------*\
##    ex 00
##*------------------------------------*/
function ex_00
{
    cd ex00;

    #test du result
    ft_check_diff hw ad_src ex_00

    end
}

#*------------------------------------*\
#    ex 01
#*------------------------------------*/
function ex_01
{
    cd ex01

    #test result
    ft_check_diff mlx ad_src    ex_01_test_same_outpout

    #test size prog
    size_program=`cat -e mlx.php | wc -c`
    res_size=`ft_cmp "$size_program" "-le" 99`
    test_res "$res_size"        "ex_01_test_size_ok"

    end
}

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
ex_00
ex_01
ex_02
ex_03
ex_04
ex_05
ex_06
