<?php
abstract class connexion {
protected $pdo;
function __construct()
{
$this->pdo =new PDO('mysql:host=localhost;dbname=filmprojet','root','');
}
function __destruct()
{
$this->pdo=null;
}



}
?>