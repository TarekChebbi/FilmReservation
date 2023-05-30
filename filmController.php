<?php
include_once('film.php') ;
include_once('connexion.php');
class filmController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(film $f){

$query="insert into film(serie_film,titre,genre,directeur,date_sortie,duree)values(?, ?, ?, ?, ?, ?)";
$res=$this->pdo->prepare($query);

$aryy =array($f->getfilmserie(),$f->getfilmtitre(),$f->getfilmgenre(),$f->getfilmdirecteur(),$f->getfilmdate(),$f->getfilmduree()) ;
//var_dump($aryy);
return $res->execute($aryy);

}

function getfilm($id){
    $query="SELECT * FROM film WHERE serie_film = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($serie_film) {
$query = "delete from film where serie_film=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($serie_film));
}
function liste(){
$query = "select * from film";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_film(film $f)
{
$sql = "UPDATE film SET  titre=?, genre=?,directeur=?,date_sortie=?,duree=? WHERE serie_film=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($f->getfilmtitre(),$f->getfilmgenre(),$f->getfilmdirecteur(),$f->getfilmdate(),$f->getfilmduree(),$f->getfilmserie()));
}


}

?>