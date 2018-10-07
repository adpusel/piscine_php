<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 4:39 PM
 */


require_once "manage_client.php";

function create_panier()
{
	if (!isset($_SESSION['panier']))
	{
		$_SESSION['panier']=array();
		$_SESSION['panier']['id_product'] = array();
		$_SESSION['panier']['quantity'] = array();
		$_SESSION['panier']['price'] = array();
	}
	return true;
}

function add_product_panier($id_product, $quantity, $price)
{
	if (creationPanier())
	{
		//Si le produit existe déjà on ajoute seulement la quantité
		$positionProduit = array_search($id_product,  $_SESSION['panier']['id_product']);
		if ($positionProduit !== false)
			$_SESSION['panier']['quantity'][$positionProduit] += $quantity ;
		else
		{
			//Sinon on ajoute le produit
			array_push( $_SESSION['panier']['id_product'],$id_product);
			array_push( $_SESSION['panier']['quantity'],$quantity);
			array_push( $_SESSION['panier']['price'],$price);
		}
	}
	else
		echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function remove_product_panier($id_product)
{
	//Si le panier existe
	if (creationPanier())
	{
		//Nous allons passer par un panier temporaire
		$tmp=array();
		$tmp['id_product'] = array();
		$tmp['quantity'] = array();
		$tmp['price'] = array();
		for($i = 0; $i < count($_SESSION['panier']['id_product']); $i++)
		{
			if ($_SESSION['panier']['id_product'][$i] !== $id_product)
			{
				array_push( $tmp['id_product'],$_SESSION['panier']['id_product'][$i]);
				array_push( $tmp['quantity'],$_SESSION['panier']['quantity'][$i]);
				array_push( $tmp['price'],$_SESSION['panier']['price'][$i]);
			}

		}
		//On remplace le panier en session par notre panier temporaire à jour
		$_SESSION['panier'] =  $tmp;
		//On efface notre panier temporaire
		unset($tmp);
	}
	else
		echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


function montant_total()
{
   $total=0;
      for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
		{
			$total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['price'][$i];
		}
	     return $total;
}

function nombre_product()
{
	if (isset($_SESSION['panier']))
		return count($_SESSION['panier']['id_product']);
	 else
			return 0;
}
