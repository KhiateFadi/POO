<?php
class reservation{
  private $_date;
  private $_heure;
  private $_personne;
  private $_nom;
  private $_tel;
  private $_email;

public function __construct($date,$heure,$personne,$nom,$tel,$email){
  $this->setDate($date);
  $this->setHeure($heure);
  $this->setPersonne($personne);
  $this->setNom($nom);
  $this->setTel($tel);
  $this->setEmail($email);

  try {
    $bdd =  new PDO('mysql:host=localhost;dbname=poo;charset=utf8','root','');
  } catch (Exception $e) {
     die('Erreur:'.$e->getMessage());
  }
public function setDate($date){
  if(empty($date)){
    header("location:eojif.php");
    return;
  }
  $this->_date=$date;
}


public function setHeure($heure){
  if(empty($heure)){
    header("location:eojif.php");
    return;
  }
  $this->_heure=$heure;
}


public function setPersonne($personne){
  if(empty($personne)){
    header("location:eojif.php");
    return;
  }
  $this->_personne=$personne;
}


public function setNom($nom){
  if(empty($nom)){
    header("location:eojif.php");
    return;
  }
  $this->_nom=$nom;
}


public function setTel($tel){
  if(empty($tel)){
    header("location:eojif.php");
    return;
  }
  $this->_tel=$tel;
}


public function setEmail($email){
  if(empty($email)){
    header("location:eojif.php");
    return;
  }
  $this->_email=$email;
}

public function getDate(){return $this->_date;}
public function getHeure(){return $this->_heure;}
public function getPersonne(){return $this->_personne;}
public function getNom(){return $this->_nom;}
public function getTel(){return $this->_tel;}
public function getEmail(){return $this->_email;}





}
