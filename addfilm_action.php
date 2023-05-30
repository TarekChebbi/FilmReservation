<?php require_once('film.php');
require_once('filmController.php');
$film_serie=$_POST['serie'];
$film_titre=$_POST['titre'];
$film_genre=$_POST['genre']; 
$film_directeur=$_POST['directeur'];
$film_duree=$_POST['duree'];
$film_date=$_POST['date'];
$film=new film($film_serie,$film_titre,$film_genre,$film_directeur,$film_duree,$film_date);
$filmCtr=new filmController();


$res=$filmCtr->insert($film);
//echo $client->getNcin();
if($res==true){
	header('Location:addfilm.php');
}


 ?> 
