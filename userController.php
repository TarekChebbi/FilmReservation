<?php
include_once('user.php') ;
include_once('connexion.php');
class userController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(user $u){

$query="insert into login_reserve(name,mail,password)values(?, ?, ?)";
$res=$this->pdo->prepare($query);

$aryy =array($u->getName(),$u->getMail(),$u->getPassword()) ;
//var_dump($aryy);
return $res->execute($aryy);

}





}

?>


	