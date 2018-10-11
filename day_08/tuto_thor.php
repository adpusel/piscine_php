<?php
/**
 * User: adpusel
 * Date: 11/10/2018
 * Time: 17:22
 */
 
// je peux faire les <<< end // END pour ecrire des choses en php
// comme quand je faisait les scriot shell

/*
 *	note du tuto
 *
 * 	les exeptions	--------
 *	dans le try catch, tout ce qui est appres le catch n'est jamais executer
 * 	en heritant de la class exeption je peux la specialier et lever // documenter des err
 * 	perticuliere
 * 	les methode de la class exeption sont en final, ce qui empeche de les redeffinir
 * 	permet d'avoir le meme comportement partout || surtout si c'est pas moi qui le code
 * 	il y a bq de class d'exeption standard, qui font deja pas mal de chose
 *
 *
 *	les traits		--------
 *
 *
 * 	j'ai plein de class qui contiennent la meme methode,
 * 	mais je ne veux pas faire de copier coller ni de heritage car,
 * 	l'heritage ne marche que si la classe fille peut aussi etre une class mere
 *	pas de raisonement vartical,
 * 	nous allons donc prendre les traits
 * 	dans la class je specifie le trait --> use < trait >
 * 	je peux prendre plusieur trait dans une class ?
 *
 *	quand j'ai plusieur trait je peux choisir le trait a utiliser
 * 	je peux faire des alias des fonctions dans les traits :) (ca c'est cool)
 *
 *	les trsit peuvent aussi avoir des interfaces
 *
 * 	thor reparle du key final permet de ne pas redefinr les method pas tellemnent le feu
 * 	ca bebe
 *
 *
 *
 *
 * */