<?php

if (isset($_POST["submit"])) {
    $email = $_POST["email"];

    require_once 'dbhandler.php';
    require_once 'funtions.php';

    if (emptyEmailInput($email) !== false) {
        $currentPage = $_SERVER["REQUEST_URI"];
        header("Location: ../php/index.php?error=emptyinput&return=");
        exit();
    }



    addEmail($conn, $email);
} else {
    header("location: ../php/index.php");
    exit();
}