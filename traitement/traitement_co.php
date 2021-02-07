<?php

require_once '../manager/manager.php';
require_once '../model/connexion.php';

$co = new connexion(array(
              'email' => $_POST['email'],
              'pwd' => $_POST['pwd']
            ));

$man = new manager();
$man->connexion($co);
var_dump($_POST);
?>
