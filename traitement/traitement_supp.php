<?php

require_once '../manager/manager.php';
require_once '../model/utilisateur.php';

$co = new utilisateur(array(
              'email' => $_POST['email'],
            ));

$man = new manager();
$man->suppression($co);
?>
