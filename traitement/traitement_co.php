<?php

require_once '../manager/manager.php';
require_once '../model/utilisateur.php';

$co = new utilisateur(array(
              'email' => $_POST['email'],
              'pwd' => $_POST['pwd']
            ));
//sh1
$man = new manager();
$man->connexion($co);
var_dump($_POST);
?>
