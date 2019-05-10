<?php
    session_start();
    $email= $_SESSION['email'];
    require '../include/config.php';
    if(!isset($_SESSION['email'])){
    header('Location: ../index.php');
    }

