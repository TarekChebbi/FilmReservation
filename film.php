<?php

class film {
private $film_serie,
 $film_titre,
 $film_genre,
 $film_directeur,
 $film_duree,
 $film_date;
function __construct($film_serie="",$film_titre="",$film_genre="",$film_directeur="",$film_duree="",$film_date="") {
	
    $this->film_serie=$film_serie;
    $this->film_titre=$film_titre;
    $this->film_genre=$film_genre;
    $this->film_directeur=$film_directeur;
    $this->film_duree=$film_duree;
    $this->film_date=$film_date;
}

public function getfilmserie(){
	return $this->film_serie;
}

public function getfilmtitre(){
	return $this->film_titre;
}

public function getfilmgenre(){
	return $this->film_genre;
}

public function getfilmdirecteur(){
	return $this->film_directeur;
}
public function getfilmduree(){
	return $this->film_duree;
}
public function getfilmdate(){
	return $this->film_date;
}


public function setfilmserie($film_serie){
        $this->film_serie = $film_serie;
    }

public function setfilmtitre($film_titre){
        $this->film_titre = $film_titre;
    }

public function setfilmgenre($film_genre){
        $this->film_genre = $film_genre;
    }

 public function setfilmdirecteur($film_directeur){
        $this->film_directeur = $film_directeur	;
    }
    public function setfilmduree($film_duree){
        $this->film_duree = $film_duree	;
    }
    public function setfilmdate($film_date){
        $this->film_date = $film_date	;
    }
	
}?>