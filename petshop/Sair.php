<?php 

session_start(); 
session_destroy(); 
header('Location: ../views/Index.php');

?>