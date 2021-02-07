<?php

require_once '../manager/manager.php';
require_once '../model/connexion.php';

$co = new connexion(array(
              'prenom' => $_POST['prenom'],
              'nom' => $_POST['nom'],
              'email' => $_POST['email'],
              'tel' => $_POST['tel'],
              'age' => $_POST['age']
            ));

$man = new manager();
$man->modification($co);
var_dump($_POST);
?>
