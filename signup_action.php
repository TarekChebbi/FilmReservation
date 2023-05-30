<?php
require_once('userController.php');
require_once('user.php');
$name=$_POST['name'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$user=new user($name,$mail,$password);
$userCtr=new userController();


 $res=$userCtr->insert($user);
//echo $client->getNcin();
if($res==true){
	header('Location:index.php');
}

?>