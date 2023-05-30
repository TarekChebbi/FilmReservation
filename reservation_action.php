<?php require_once('reserve.php');
require_once('reserveController.php');
$reservation_titre=$_POST['titre'];
$reservation_nom=$_POST['nom'];
$reservation_email=$_POST['email']; 
$reservation_phone=$_POST['phone'];
$reservation_siege=$_POST['option'];
$reservation_ticket=$_POST['ticket'];
$reserve=new reserve($reservation_titre,$reservation_nom,$reservation_email,$reservation_phone,$reservation_siege,$reservation_ticket);
$reserveCtr=new reserveController();


$res=$reserveCtr->insert($reserve);
//echo $client->getNcin();
if($res==true){
	header('Location:reservation.php');
}



 ?> 
