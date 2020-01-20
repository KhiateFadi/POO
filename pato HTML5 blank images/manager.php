<?php
require_once('traitement_classe.php')
class Manager{

  public function __construct(){

  }
  public function inscription(reservation $tableau){

    try {
      $bdd =  new PDO('mysql:host=localhost;dbname=poo;charset=utf8','root','');
    } catch (Exception $e) {
       die('Erreur:'.$e->getMessage());
    }

  $req = $bdd->prepare('INSERT INTO reservation (date_reservation,heure,personne,nom,tel,email) VALUES (:date_reservation,:heure,:personne,:nom,:tel,:email)');
  $b = $req->execute(array($tableau->getDate_reservation(),$tableau->getHeure(),$tableau->getPersonne(),$tableau->getNom(),$tableau->getTel(),$tableau->getEmail()));



  }
}





 ?>
