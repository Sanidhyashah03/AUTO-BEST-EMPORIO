<?php 
session_start();
unset($_SESSION["Buyer"]);

header('Location:Home.php');
?>