<?php

require_once("Produit.php");
require_once("ProduitsKilo.php");

$P1 = new ProduitKilo("Kiwi",50);

$P2 = new ProduitKilo("Noix de Coco",20);

//Un client achète 2kg de Kiwi

$total = $P1->CalculPrix(2);
echo "Le total est de: ".$total." € </br>";

//Un client achète 4kg de Noix de Coco

$total2 = $P2->CalculPrix(4);
echo "Le total est de: ".$total2." € </br>";
?>