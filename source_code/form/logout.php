<?php
session_start();
if(isset($_SESSION['idUser'])){
   session_unset();
    header("Location: ../pages/index/index.php");
}

?>