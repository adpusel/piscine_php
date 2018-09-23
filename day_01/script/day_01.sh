#!/usr/bin/env bash

# une fonction pour comparer du texte
# comment check si les fonctions sont bien celle qui sont authoriser ?

#clean tout les fichiers a la fin
. "function.sh"



copie_all code


cd ..
#delete_trace

##*------------------------------------*\
##    ex 00
##*------------------------------------*/
cd ex00;

#test du result
ft_check_diff hw ad_src ex_00

end


##*------------------------------------*\
##    ex 01
##*------------------------------------*/
cd ex01

#test result
ft_check_diff mlx ad_src    ex_01_test_same_outpout

#test size prog
size_program=`cat -e mlx.php | wc -c`
res_size=`ft_cmp "$size_program" "-le" 99`
test_res "$res_size"        "ex_01_test_size_ok"

end


#*------------------------------------*\
#    ex 02
#*------------------------------------*/
cd ex02

#test result
ft_check_diff_EFO oddeven ad_src ad_test_text ex_02_same_output

#dernier check
#./oddeven.php

end

#*------------------------------------*\
#    ex 03
#*------------------------------------*/
cd ex03

#build my main
cat ad_main.php | tail -n +4 > tmp
{ echo '<?PHP  include "ad_src.php"; '; cat tmp; } > ad_main_test.php
rm tmp

ft_check_diff ad_main ad_main_test ex_03_same_output

end


#*------------------------------------*\
#    ex 04
#*------------------------------------*/
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

#*------------------------------------*\
#    ex 05
#*------------------------------------*/
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


##*------------------------------------*\
##    ex 06
##*------------------------------------*/
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


#*------------------------------------*\
#    ex 07
#*------------------------------------*/
cd ex07

echo ;echo "ex07 ============================="
echo ++++++++++
php rostring.php  | cat -e
echo ++++++++++
php rostring.php "    2   1  " | cat -e
echo ++++++++++
php rostring.php "    3 1  2  " | cat -e
echo ++++++++++
php rostring.php "  1  " | cat -e
echo ++++++++++
php rostring.php "  2 dsfh adsfhjaksdf              jdjklsjkadfs          ioerwfioefrwj        jadsjkfl      1  " | cat -e
echo ++++++++++

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

diff_param ex_06_same_output



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