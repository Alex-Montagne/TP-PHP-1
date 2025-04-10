<?php

class Personne {
    private $_nom;
    private $_prenom;
    private $_age;
    
     // Constructeur

    public function __construct($prenom,$nom,$age){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_age = $age;
    }

    // Getters (accesseurs)

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getAge(){
        return $this->_age;
    }

    // Setters (mutateurs)

    public function setNom($nouvNom){
        $this->_nom = $nouvNom;
    }

    public function setPrenom($nouvPrenom){
        $this->_prenom = $nouvPrenom;
    }

    public function setAge($nouvAge){
        $this->_age = $nouvAge;
    }

     // Méthodes

    public function sePresenter(){
        echo "Bonjour, je suis ".$this->GetPrenom()." ".$this->GetNom().", j'ai ".$this->GetAge()." ans. \n";
    }
    
    public function estMajeur(){
        if($this->_age < 18){
            echo "Cette personne n'est pas majeure. \n";
        }
        else{
            echo "Cette personne est majeure. \n";
        }
    }
}

// Utilisation de la classe

$personne1 = new Personne("Jean","Dupond",40);
$personne2 = new Personne("Marc","Moulin",17);

$personne1 -> sePresenter();
$personne2 -> sePresenter();

$personne1 -> estMajeur();
$personne2 -> estMajeur();

// Modification des propriétés

$personne1 -> setNom("Dupont");
$personne1 -> setAge(41);
$personne1 -> sePresenter();