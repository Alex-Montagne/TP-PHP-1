<?php

// Classe parente
class Vehicule {
    protected $_marque;
    protected $_modele;
    protected $_annee;
    
    public function __construct($marque, $modele, $annee) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_annee = $annee;
    }
    
    public function getInfos() {
        echo $this->_marque." ";
        echo $this->_modele." ";
        echo $this->_annee." ";
    }
    
    public function demarrer() {
        return "Le véhicule démarre.";
    }
}

// Classe enfant qui hérite de Vehicule
class Voiture extends Vehicule {
    private $_nombrePortes;
    private $_typeCarburant;
    
    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        // Appel du constructeur parent
            parent::__construct($marque, $modele, $annee);

        // Initialisation des propriétés spécifiques
            $this->_nombrePortes = $nombrePortes;
            $this->_typeCarburant = $typeCarburant;
    }

    // Surcharge de la méthode getInfos()
    public function getInfos() {
        parent::getInfos();
        echo $this->_nombrePortes." ";
        echo $this->_typeCarburant."\n";
    }
    
    // Méthode spécifique
    public function klaxonner() {
        echo "bip bip";
    }
}

// Classe enfant qui hérite de Vehicule
class Moto extends Vehicule {
    private $_cylindree;
    
    public function __construct($marque, $modele, $annee, $cylindree) {
            parent::__construct($marque, $modele, $annee);
            $this->_cylindree = $cylindree;
    }

    public function getInfos() {
        parent::getInfos();
        echo $this->_cylindree."\n";
    }
}

// Utilisation des classes
$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");
$moto = new Moto("Aprilia", "RS660",2021, "659cm3");

$voiture -> getInfos();
$moto -> getInfos();