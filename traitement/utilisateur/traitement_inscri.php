<?php

require_once '../manager/manager.php';
require_once '../model/utilisateur.php';

$co = new utilisateur(array(
              'prenom' => $_POST['prenom'],
              'nom' => $_POST['nom'],
              'email' => $_POST['email'],
              'tel' => $_POST['tel'],
              'age' => $_POST['age'],
              'pwd' =>password_hash($_POST['pwd'], PASSWORD_DEFAULT)
            ));

$man = new manager();
$man->inscription($co);
?>
