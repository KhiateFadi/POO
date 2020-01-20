<?php

require_once('traitement_reservation.php');
require_once('manager.php');
if(empty($date_reservation,$heure,)){
  echo "formulaire incomplet";
}
else{
  $inscription = new reservation($_POST[]);
  $inscription->inscription();
}

 ?>
