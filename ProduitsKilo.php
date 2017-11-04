<?php
require_once("Produit.php");

class ProduitKilo extends Produit {
	
	protected $PrixKilo;
	
	//Définir la fonction CalculPrix imposée par la classe abstraite
	public function CalculPrix($poids){
		return $this->PrixKilo*$poids;
	}
	
	//Le constructeur renvoi au parent le nom et permet d'ajouter le produit 
	//au nombre de produits existants
	public function __construct($Name,$PrixK) {
		parent::__construct($Name);
		$this->PrixKilo=$PrixK;
	}
	
}

?>