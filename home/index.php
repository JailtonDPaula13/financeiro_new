<?php
    session_start();
    if(isset($_SESSION['nome'])){
        header('location: central_de_volumes.php');
    }
    else{
        header('location: ../');
    }
?>