<?php
    session_start();
    session_unset();
    header("Location: homePage.php");
    exit();
?>