<?php
class reserve
{
/* attributs de la classe utilisateur*/
private $reservation_id,
 $reservation_titre,
 $reservation_nom,
 $reservation_email,
 $reservation_phone,
 $reservation_siege,
 $reservation_ticket;
/* Constructeur de la classe */
function __construct($reservation_titre="",$reservation_nom="",$reservation_email="",$reservation_phone="",$reservation_siege="",$reservation_ticket="") {
	
    
    $this->reservation_titre=$reservation_titre;
    $this->reservation_nom=$reservation_nom;
    $this->reservation_email=$reservation_email;
    $this->reservation_phone=$reservation_phone;
    $this->reservation_siege=$reservation_siege;
    $this->reservation_ticket=$reservation_ticket;
}

public function getreservationid(){
	return $this->reservation_id;
}

public function getreservationtitre(){
	return $this->reservation_titre;
}

public function getreservationnom(){
	return $this->reservation_nom;
}

public function getreservationemail(){
	return $this->reservation_email;
}
public function getreservationphone(){
	return $this->reservation_phone;
}
public function getreservationsiege(){
	return $this->reservation_siege;
}
public function getreservationticket(){
	return $this->reservation_ticket;
}


public function setreservationid($reservation_id){
        $this->reservation_id = $reservation_id;
    }

public function setreservationtitre($reservation_titre){
        $this->reservation_titre = $reservation_titre;
    }

public function setreservationnom($reservation_nom){
        $this->reservation_nom = $reservation_nom;
    }

 public function setreservationemail($reservation_email){
        $this->reservation_email = $reservation_email	;
    }
    public function setreservationphone($reservation_phone){
        $this->reservation_phone = $reservation_phone	;
    }
    public function setreservationsiege($reservation_siege){
        $this->reservation_siege = $reservation_siege	;
    }
    public function setreservationticket($reservation_ticket){
        $this->reservation_ticket = $reservation_ticket	;
    }
	
}?>