<?php
session_start();
$_SESSION=array($email,$mdp);
SESSION_destroy();
header('location:login.php');

?>