<?php

class user {
private $name,$mail,$password;
function __construct($name="",$mail="",$password="") {
	
    $this->name=$name;
    $this->mail=$mail;
    $this->password=$password;
   
}

public function getName(){
	return $this->name;
}

public function getMail(){
	return $this->mail;
}

public function getPassword(){
	return $this->password;
}




public function setName($name){
        $this->name = $name;
    }

public function setMail($mail){
        $this->mail = $mail;
    }

public function setPassword($password){
        $this->password = $password;
    }


	
}?>