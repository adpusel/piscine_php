#!/usr/bin/env bash

#*------------------------------------*\
#    $1 --> le fichier ou prendre les fichiers
#    $2 --> le nom du fichier a cp
#*------------------------------------*/

function copie_all()
{
    cd $1
    for directory in `ls`; do

        cd "$directory"

        for file in `ls` ; do
            echo "$file"

            if [ "$file" = "main.php" ]; then
                cp "$file" "../../../$directory/ad_main.php"
            elif [ "$file" = "test" ] ; then
                cp "$file" "../../../$directory/ad_test_text"
            else
                cp "$file" "../../../$directory/ad_src.php"
            fi
        done

        cd ..
    done
    cd ..
}

# delete
function delete_trace()
{
    find . -type f  -name '*ad*' -exec rm -rf {} \;
    find . -type f  -name 'my' -exec rm -rf {} \;
    find . -type f  -name 'your' -exec rm -rf {} \;
}


function ft_cmp()
{
    if  [ "$1" "$2" "$3" ]; then
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

function ft_do_diff()
{
    php "./$1.php"   | cat -e > your
    php "./$2.php"   | cat -e > my

    DIFF=$(diff your my)

    if  [ "$DIFF" == "" ]; then
        echo 1
    else
        echo 0
    fi
}

#*------------------------------------*\
#    $1 => fichier a test || $2 => ficher de test || $3 => nom exo
#*------------------------------------*/
function ft_check_diff()
{
    res=$(ft_do_diff $1 $2)

    if  [ "$res" -eq 0 ];  then
            diff your my
    fi

    test_res "$res" $3
}


function ft_do_diff_EFO()
{
    php "./$1.php"  < $3  | cat -e > your
    php "./$2.php"  < $3 | cat -e > my
    DIFF=$(diff your my)

    if  [ "$DIFF" == "" ]; then
        echo 1
    else
        echo 0
    fi
}

#*------------------------------------*\
#    $1 => fichier a test || $2 => ficher de test || $3 => nom exo
#*------------------------------------*/
function ft_check_diff_EFO()
{
    res=$(ft_do_diff_EFO $1 $2 $3)

    if  [ "$res" -eq 0 ];  then
            diff your my
    fi

    test_res "$res" $4
}


function diff_param()
{
    DIFF=$(diff your my)

    if  [ "$DIFF" == "" ]; then
        res=1
    else
        res=0
    fi
    #------------------------------------------
    if  [ "$res" -eq 0 ];  then
            diff your my
    fi

    test_res "$res" $1

}

function test_arg()
{
    php $@ | cat -e >> your
    php  ad_src.php ${@:2}| cat -e >> my
}


function end()
{
    unset IFS
    echo
    cd ..
}