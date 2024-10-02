<?php 
    session_start();

    unset($_SESSION['Email']);
    unset($_SESSION['email']);
    unset($_SESSION['NomeClinte']);
    unset($_SESSION['Profile']);
    header('location: index.php');
    exit;
?>