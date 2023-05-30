<?php
require_once('filmController.php');
require_once('film.php');
$filmCtr=new filmController();
$film=new film();
$film->setfilmserie($_POST['serie']);
$film->setfilmtitre($_POST['titre']);
$film->setfilmgenre($_POST['genre']);
$film->setfilmdirecteur($_POST['directeur']);
$film->setfilmduree($_POST['duree']);
$film->setfilmdate($_POST['date']);
$filmCtr->modifier_film($film);
header('Location:listefilm.php');
 ?> 