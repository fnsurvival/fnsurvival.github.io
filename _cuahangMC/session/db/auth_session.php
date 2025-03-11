<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header(header: "Location: ../UI/login.php");
        exit();
    }
?>

