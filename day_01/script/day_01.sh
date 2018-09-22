#!/usr/bin/env bash

# une fonction pour comparer du texte
# comment check si les fonctions sont bien celle qui sont authoriser ?

#clean tout les fichiers a la fin

# j'ai les meme dossier et je copie tout ce qu'il y a dans le dossier dans l'autre

#*------------------------------------*\
#    $1 --> le fichier ou prendre les fichiers
#    $2 --> le nom du fichier a cp
#*------------------------------------*/
function copie_all()
{
    cd $1
    for directory in `ls` ;do
        cd $directory
#        echo $directory

        for file in `ls` ;do
            echo $file
            cp $file "../../../$directory/source_adpusel.php"
        done

        cd ..
    done
    cd ..
}

# delete
function delete_trace()
{
    find . -type f  -name '*adpusel*' -exec rm -rf {} \;
}


function ft_cmp()
{
    if  [ "$1" "$2" "$3" ]; then
        echo 1
    else
        echo 0
    fi
}

function ft_do_diff()
{
    php "./$1"      | echo -e   > your
    php ./code.php  | echo -e   > my

    DIFF=$(diff your my)

    if  [ "$DIFF" == "" ]; then
        echo 1
    else
        echo 0
    fi
}

function test_res()
{
    if  [ "$1" -eq 1 ]; then
        printf "\e[1;32m--> OK   $2 \e[0m\n"
    else
        printf "\e[1;31m--> FAIL $2  \e[0m\n"
    fi
}

#*------------------------------------*\
#    S1 => fichier test  || $2 => nom exo
#*------------------------------------*/
function ft_check_diff()
{
    res=$(ft_do_diff $1)

    if  [ "$res" -eq 0 ];  then
            diff your my
    fi

    test_res "$res" $2
}

function end()
{
    echo
    cd ..
}

copie_all code



#copie_all php_file


cd ..
#delete_trace

##*------------------------------------*\
##    ex 00
##*------------------------------------*/
cd ex00;

#test du result
ft_check_diff hw.php ex_00

end


###*------------------------------------*\
###    ex 01
###*------------------------------------*/
#cd ex01
#
##test
#value=`printf "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX\n" | cat -e`
#
##ret
#ret=`./mlx.php | cat -e`
#size_program=`cat -e mlx.php | wc -c`
#
##res
#res=$(ft_cmp "$value" = "$ret")
#res_size=$( ft_cmp $size_program "-le" 99)
#
##check
#check_res "$res"        "ex_01 --> same output"
#check_res "$res_size"   "ex_01 --> size ok"
#
#end
#
#
##*------------------------------------*\
##    ex 02
##*------------------------------------*/
#function ex_02()
#{
#cd ex02
#
##ret
#ret=`./oddeven.php << F
#42sf24
#q4224
#4224a
#asdf
#
#0
#42
#23
#465465432134643136541654163513165416613654167496146456646465464646464987498744647
#465465432134643136541654163513165416613654167496146464175465484616164169841641844
#23aa
#adsf
#aa55
#0
#F
#`
#
##generate diff
#echo "$ret"  | cat -e > ret
#
## do diff
#res=$(ft_do_diff diff_ex_02 ret)
#
##check la diff
#ft_check_diff diff_ex_02 ret
#
##check le res
#check_res "$res"        "ex_02 --> diff ok"
#
##dernier check
#./oddeven.php
#
#end
#}
#ex_02

# je met le script dans le repertoire, je copie tout les fichier
# dans les dossiers correspondant
#*------------------------------------*\
#    ex 03
#*------------------------------------*/
#cd ex03
#
#php ex_03.php | cat -e > your
#php code.php | cat -e > my
#cd ..
#read
#
##*------------------------------------*\
##    ex 04
##*------------------------------------*/
#
#cd ex04
#echo ;echo "ex04 ============================="
#echo - vide
#php aff_param.php | cat -e
#echo -
#php aff_param.php 55 22 | cat -e
#echo -
#php aff_param.php 55 22 a g aann  dafsd gqerg w qjfq eqwfqwenvy qlklqwjr hqwhr cxqew ewh cqewcr teqrkhchrtecqekwhrx qwliukcr hqwilu | cat -e
#echo -
#php aff_param.php super super super | cat -e
#echo -
#php aff_param.php "super super super" | cat -e
#cd ..
#read
#
##*------------------------------------*\
##    ex 05
##*------------------------------------*/
#cd ex05
#echo ;echo "ex05 ============================="
#echo - vide
#php epur_str.php | cat -e
#echo - vide
#php epur_str.php "" | cat -e
#echo -
#php epur_str.php "    55    " | cat -e
#echo -
#php epur_str.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e
#echo - vide
#php epur_str.php "    " | cat -e
#echo -
#php epur_str.php "  a a " | cat -e
#echo -
#cd ..
#read
#
#
##*------------------------------------*\
##    ex 06
##*------------------------------------*/
#cd ex06
#echo ;echo "ex06 ============================="
#echo ++++++++++
#php ssap.php | cat -e
#echo ++++++++++
#php ssap.php "    55    " | cat -e
#echo ++++++++++
#php ssap.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e
#echo ++++++++++
#php ssap.php "    " | cat -e
#echo ++++++++++
#php ssap.php "  a a " | cat -e
#echo ++++++++++
#php ssap.php  foo bar "yo man" "A moi compte, deux mots" Xibul | cat -e
#read
#cd ..
#
##*------------------------------------*\
##    ex 07
##*------------------------------------*/
#cd ex07
#echo ;echo "ex07 ============================="
#echo ++++++++++
#php rostring.php  | cat -e
#echo ++++++++++
#php rostring.php "    2   1  " | cat -e
#echo ++++++++++
#php rostring.php "    3 1  2  " | cat -e
#echo ++++++++++
#php rostring.php "  1  " | cat -e
#echo ++++++++++
#php rostring.php "  2 dsfh adsfhjaksdf              jdjklsjkadfs          ioerwfioefrwj        jadsjkfl      1  " | cat -e
#echo ++++++++++
#read
#cd ..
#
##*------------------------------------*\
##    ex 08
##*------------------------------------*/
#cd d_01
#echo ;echo "ex08 ============================="
#php test_2.php
#cd ..
#read
#
##*------------------------------------*\
##    ex 09
##*------------------------------------*/
#cd ex09
#echo ;echo "ex09 ============================="
##php ssap2.php p toto tutu 4234 "_hop XXX" '##' "1948372 AhAhAh"
#echo ++++++++++
#php ssap2.php
#echo ++++++++++
#php ssap2.php %D a3 a1 "4?  d" _4 a+ ab 420 0A2 test test super super
#echo ++++++++++
#php ssap2.php %D a3 a1 "4?  d" _4 b- a00 00+ ab 420 0A2 test 0 00 00000 00 test super super
#echo ++++++++++
#php ssap2.php 00 00 0000 0
#echo ++++++++++
#php ssap2.php "0000 00000 00 0 00000 00 0 00 0000 000 0 0"
#echo ++++++++++
#php ssap2.php %D a3 a1 "4?  d" _4 a+ ab 420 0A2
#echo ++++++++++
#cd ..
#read
#
#
###*------------------------------------*\
###    ex 10
###*------------------------------------*/
#cd ex10
#echo ;echo "ex10 ============================="
#php do_op.php
#php do_op.php 4
#php do_op.php 4 8
#php do_op.php 4 8 5 8
#
#echo ==
#
#php do_op.php 21 + 21
#php do_op.php 43 - 1
#php do_op.php 1764 / 42
#php do_op.php 1 "*" 42
#php do_op.php 1807 % 42
#cd ..
#read
#
#
##*------------------------------------*\
##    ex 11
##*------------------------------------*/
#cd ex11
#echo ;echo "ex11 ============================="
#
#php do_op_2.php
#php do_op_2.php "4" "4"
#
#echo ==
#
#php do_op_2.php "4"
#php do_op_2.php "4 8"
#php do_op_2.php "4 dd 8"
#php do_op_2.php "42 / 0"
#php do_op_2.php "42 % 0"
#php do_op_2.php "aa42 % 4"
#php do_op_2.php "42 % a4"
#php do_op_2.php "asdfgs42 % adfs4"
#php do_op_2.php "toto % 55"
#php do_op_2.php "55 % toto"
#php do_op_2.php "55 toto 44"
#
#echo ==
#
#php do_op_2.php "21    +    21"
#php do_op_2.php "43-1"
#php do_op_2.php "43   -   1"
#php do_op_2.php "1764/42"
#php do_op_2.php "1764   /   42"
#php do_op_2.php "1*42"
#
#echo ==
#
#php do_op_2.php "000021 + 0000021"
#php do_op_2.php "021 + 21"
#
#
#php do_op_2.php "    1807           %     42   "
#php do_op_2.php "   1           *     4200000   "
#
#cd ..
#read
#
###*------------------------------------*\
###    ex 12
###*------------------------------------*/
#cd ex12
#echo ;echo "ex12 ============================="
#
#php search_it!.php minh "toto:naher" "minh:belle"
#php search_it!.php  toto "key1:val1" "key2:val2" "toto:42"
#php search_it!.php  toto  toto "toto:val1" "key2:val2" "toto:42"
#php search_it!.php  p "toto" "key1:val1" "key2:val2" "0:hop"
#php search_it!.php   "0" "key1:val1" "key2:val2" "0:hop"
#php search_it!.php   "key1:val1" "key2:val2" "0:hop"
#php search_it!.php
#cd ..
#
#read
####*------------------------------------*\
####    ex 14
####*------------------------------------*/
##cd ex14
##echo ;echo "ex14 ============================="
##cat peer_notes_1.csv | ./agent_stats.php