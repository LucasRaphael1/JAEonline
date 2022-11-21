<?php
    session_start();
    unset($_SESSION['cgm']);
    unset($_SESSION['senha']);
    header('Location: ../login.php');
?>