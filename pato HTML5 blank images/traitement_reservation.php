<?php


require_once('manager.php')
class reservation{
  private $_date_reservation;
  private $_heure;
  private $_personne;
  private $_nom;
  private $_tel;
  private $_email;

public function __construct(array $donnees){
  $this->hydrate($donnees);

  }

  public function hydrate($donnees){
    foreach($donnees as $key => $value){
      $method = 'set'.ucfirst($key);
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }

public function setDate_reservation($date_reservation){
  if(empty($date_reservation)){
    header("location:eojif.php");
    return;
  }
  $this->_date_reservation = $date_reservation;
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

public function getDate_reservation(){return $this->_date_reservation;}
public function getHeure(){return $this->_heure;}
public function getPersonne(){return $this->_personne;}
public function getNom(){return $this->_nom;}
public function getTel(){return $this->_tel;}
public function getEmail(){return $this->_email;}


}
