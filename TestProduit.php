<?php

require_once("Produit.php");
require_once("ProduitsKilo.php");
require_once("ProduitUnite.php");

$P1 = new ProduitKilo("Kiwi",50);

$P2 = new ProduitUnite("Noix de Coco",5);

// Si la statique est publique :
$nbr = Produit::$NombreProduits;
echo "Le nombre de produits est :".$nbr;

echo "</br>";

//si elle est protégée on passe par une fonction :
echo "Le nombre de produits est :";
Produit::afficheNombre();

?>