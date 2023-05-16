<?php
session_start();
if(isset($_SESSION['idUser'])){
   session_unset();
    header("Location: http://localhost/Project_PHP/source_code/pages/index/");
}

?>