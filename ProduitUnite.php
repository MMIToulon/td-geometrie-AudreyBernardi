<?php
require_once("Produit.php");

class ProduitUnite extends Produit {
	
	protected $PrixUnite;
	
	//Définir la fonction CalculPrix imposée par la classe abstraite
	public function CalculPrix($nombre){
		return $this->PrixUnite*$nombre;
	}
	
	//Le constructeur renvoi au parent le nom et permet d'ajouter le produit 
	//au nombre de produits existants
	public function __construct($Name,$PrixU) {
		parent::__construct($Name);
		$this->PrixUnite=$PrixU;
	}
	
}

?>