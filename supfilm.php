<?php
require_once('filmController.php');
$filmCtr=new filmController();
$filmCtr->delete($_GET['id']);
header('Location:listefilm.php');
?>