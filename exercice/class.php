<?php

class animal {

    public $nom;
    public $nom_proprio;
    public $email_proprio;
    public $date_entree;
    public $nature_soins;
    public $commentaires;
    public $date_sortie;
    public $tarif;
    
    function __construct($nomanimal,$nameproprio, $mail, $datedentree, $soins, $commentairestexte, $datesortie, $prix){
        $this->nom = $nomanimal;
		$this->email_proprio = $mail;
		$this->date_entree = $datedentree;
		$this->nature_soins = $soins;
		$this->commentaires = $commentairestexte;
		$this->date_sortie = $datesortie;
		$this->tarif = $prix;
	}

    function getNom() {
        return $this->nom;
    }

    function getNom_proprio() {
        return $this->nom_proprio;
    }

    function getEmail_proprio() {
        return $this->email_proprio;
    }

    function getDate_entree() {
        return $this->date_entree;
    }

    function getNature_soins() {
        return $this->nature_soins;
    }

   function getCommentaires() {
        return $this->commentaires;
    }

    function getDate_sortie() {
        return $this->date_sortie;
    }

    function getTarif() {
        return $this->tarif;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setNom_proprio($nom_proprio) {
        $this->nom_proprio = $nom_proprio;
    }

    function setEmail_proprio($email_proprio) {
        $this->email_proprio = $email_proprio;
    }

    function setDate_entree($date_entree) {
        $this->date_entree = $date_entree;
    }

    function setNature_soins($nature_soins) {
        $this->nature_soins = $nature_soins;
    }
   function setCommentaires() {
        $this->commentaires = $commentaires;
    }
    function setDate_sortie($date_sortie) {
        $this->date_sortie = $date_sortie;
    }

    function setTarif($tarif) {
        $this->tarif = $tarif;
    }

    }


?>
