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

#*------------------------------------*\
#    ex 07
#*------------------------------------*/
function ex_07
{
    cd ex07

    php rostring.php | cat -e > your
    php ad_src.php | cat -e > my

    php rostring.php "" | cat -e >> your
    php ad_src.php "" | cat -e >> my

    php rostring.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e >> your
    php ad_src.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e >> my

    php rostring.php foo bar "yo man" "A moi compte, deux mots" Xibul | cat -e >> your
    php ad_src.php foo bar "yo man" "A moi compte, deux mots" Xibul | cat -e >> my

    php rostring.php "    " | cat -e >> your
    php ad_src.php "    "| cat -e >> my

    php rostring.php sdfkjsdkl sdkjfskljdf | cat -e >> your
    php ad_src.php sdfkjsdkl sdkjfskljdf| cat -e >> my

    php rostring.php "hello world  aaa" fslkdjf | cat -e >> your
    php ad_src.php "hello world  aaa" fslkdjf | cat -e >> my

    diff_param ex_07_same_output

    end
}


#*------------------------------------*\
#    ex 08
#*------------------------------------*/
function ex_08
{
    cd ex08

    #build my main
    cat ad_main.php | tail -n +4 > tmp
    { echo '<?PHP  include "ad_src.php"; '; cat tmp; } > ad_main_test.php
    rm tmp

    ft_check_diff ad_main ad_main_test ex_08_same_output

    end
}

#*------------------------------------*\
#    ex 09
#*------------------------------------*/
function ex_09
{
    cd ex09
    IFS=$'\n'
    test_arg ssap2.php p toto tutu 4234 "_hop XXX" '##' "1948372 AhAhAh"

    test_arg ssap2.php

    test_arg ssap2.php "             "

    test_arg ssap2.php %D a3 a1 "4?  d" _4 a+ ab 420 0A2 test test super super

    test_arg ssap2.php %D a3 a1 "4?  adsf AEFF d" _4 b- a00 00+ ab 420 0A2 NM test 0 00 00000 00 test super super

    test_arg ssap2.php 00 00 0000 0

    test_arg ssap2.php "0000 00000 false 00 0 00000 00 0 00 0000 000 0 0"

    test_arg ssap2.php %D a3 a1 "4?  d" _4 a+ ab 420 0A2

    test_arg ssap2.php %D a3 a1 "4?  d" _4 a+ ab 420 0A2

    diff_param ex_09_same_output

    end
}

##*------------------------------------*\
##    ex 10
##*------------------------------------*/
function ex_10
{
    cd ex10
    IFS=$'\n'

    #false
    test_arg do_op.php
    test_arg do_op.php 4
    test_arg do_op.php 4 8
    test_arg do_op.php 4 8 5 8

    #true
    test_arg do_op.php 21 + 21
    test_arg do_op.php 43 - 1
    test_arg do_op.php 1764 / 42

    php do_op.php 1 '*' 42 >> your
    php ad_src.php 1 '*' 42 >> my

    test_arg do_op.php 1807 % 42

    # diff
    diff_param ex_10_same_output

    end
}



#*------------------------------------*\
#    ex 11
#*------------------------------------*/
function ex_11
{
    cd ex11

    # Incorrect Parameters
    test_arg do_op_2.php
    test_arg do_op_2.php

    test_arg do_op_2.php "4 - 4" "4"
    test_arg do_op_2.php "4 - 4" "4"

    test_arg do_op_2.php "4" "4" "4" "4"
    # Syntax Error
    test_arg do_op_2.php "4"
    test_arg do_op_2.php "4 8"
    test_arg do_op_2.php "4 dd 8"
    test_arg do_op_2.php "42 / 0"
    test_arg do_op_2.php "42 % 0"
    test_arg do_op_2.php "aa42 % 4"
    test_arg do_op_2.php "42 % a4"
    test_arg do_op_2.php "asdfgs42 % adfs4"
    test_arg do_op_2.php "toto % 55"
    test_arg do_op_2.php "six6*7sept"
    test_arg do_op_2.php "55 % toto"
    test_arg do_op_2.php "55 toto 44"

    #ok
    test_arg do_op_2.php "21    +    21"
    test_arg do_op_2.php "43-1"
    test_arg do_op_2.php "43   -   1"
    test_arg do_op_2.php "1764/42"
    test_arg do_op_2.php "1764   /   42"
    test_arg do_op_2.php "1*42"
    test_arg do_op_2.php "1        *            42          "

    #dur
    test_arg do_op_2.php "000021 + 0000021"
    test_arg do_op_2.php "021 + 21"

    test_arg do_op_2.php "    1807           %     42   "
    test_arg do_op_2.php "   1           *     4200000   "

#    diff_param ex_11_same_output
    end
}

#*------------------------------------*\
#    ex 12
#*------------------------------------*/
function ex_12
{
    cd ex12
    IFS=$'\n'
    test_arg search_it!.php  minh "toto:naher" "minh:belle" 
    test_arg search_it!.php  toto "key1:val1" "key2:val2" "toto:42"
    test_arg search_it!.php  toto  toto "toto:val1" "key2:val2" "toto:42"
    test_arg search_it!.php  p "toto" "key1:val1" "key2:val2" "0:hop"
    test_arg search_it!.php   "0" "key1:val1" "key2:val2" "0:hop"
    test_arg search_it!.php   "key1:val1" "key2:val2" "0:hop"
    test_arg search_it!.php

    diff_param ex_12_same_output

    end
}


#read
####*------------------------------------*\
####    ex 14
####*------------------------------------*/
##cd ex14
##echo ;echo "ex14 ============================="
##cat peer_notes_1.csv | ./agent_stats.php

##go
#ex_00
#ex_01
#ex_02
#ex_03
#ex_04
#ex_05
#ex_06
#ex_07
#ex_08
#ex_09
#ex_10
ex_11
#ex_12
