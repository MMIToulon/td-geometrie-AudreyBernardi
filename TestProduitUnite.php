<?php

require_once("Produit.php");
require_once("ProduitUnite.php");

$P1 = new ProduitUnite("Kiwi",15);

$P2 = new ProduitUnite("Noix de Coco",5);

//Un client achète 5 Kiwis

$total = $P1->CalculPrix(5);
echo "Le total est de: ".$total." € </br>";

//Un client achète 3 Noix de Coco

$total2 = $P2->CalculPrix(43);
echo "Le total est de: ".$total2." € </br>";

?>