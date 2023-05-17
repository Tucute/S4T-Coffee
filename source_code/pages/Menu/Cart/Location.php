<?php 
    session_start();

    if (isset($_SESSION['idUser'])) {
        header('Location: index.php');
    }
    else {
        header('Location: ../../../form/login.php');
    }
?>