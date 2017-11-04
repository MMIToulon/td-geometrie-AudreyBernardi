<?php

abstract class Produit {
	
	//Les attributs de la classe abstraite :
	protected $Nom;
	// L'attribut statique qui compte le nombre de produits
	// Je teste 2 versions, l'une en publique l'autre en protégée
	public static $NombreProduits=0;
	protected static $NombreProduitsprotect=0;
	
	public abstract function CalculPrix($valeur);
	
	public function __construct($Name){
		$this->Nom=$Name;
		//On n'oublie pas de modifier le nombre de produits existant à chaque construction
		Produit::$NombreProduits=Produit::$NombreProduits+1;
		Produit::$NombreProduitsprotect=Produit::$NombreProduitsprotect+1;
	}
	
	//Une fonction pour accèder à l'attribut statique protégé.
	public static function afficheNombre() {
		echo self::$NombreProduits ;
	}
	
}

?>