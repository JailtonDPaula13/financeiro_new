<?php
    session_start();
    unset($_SESSION['login'],$_SESSION['nome'],$_SESSION['id']);
    header('location:../');
?>