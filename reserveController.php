<?php
include_once('reserve.php') ;
include_once('connexion.php');
class reserveController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(reserve $r){

$query="insert into reservation(titre,nom,email,phone,siege_option,num_ticket)values(?, ?, ?, ?, ?, ?)";
$res=$this->pdo->prepare($query);

$aryy =array($r->getreservationtitre(),$r->getreservationnom(),$r->getreservationemail(),$r->getreservationphone(),$r->getreservationsiege(),$r->getreservationticket()) ;
//var_dump($aryy);
return $res->execute($aryy);

}

/*function getVoiture($id){
    $query="SELECT * FROM voiture WHERE idVoiture = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idVoiture) {
$query = "delete from voiture where idVoiture=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idVoiture));
}*/
function liste(){
$query = "select * from reservation";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
/*
function modifier_voiture(Voiture $v)
{
$sql = "UPDATE voiture SET  marque=?, carburant=?,prixLocation=? WHERE numSerie=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($v->getMarque(),$v->getCarburant(),$v->getPrixLocation(),$v->getNumSerie()));
}*/


}

?>