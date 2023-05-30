<?php
require_once('filmController.php');
$serie_film=$_POST['serie'];
$filmCtr=new filmController();
$res=$filmCtr->delete($serie_film);
if($res==true){
	header('Location:deletefilm.php');
}
?>
