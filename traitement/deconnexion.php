<?php
session_start();
UNSET($_SESSION['email']); 
header('Location: ../index.php');
?>
