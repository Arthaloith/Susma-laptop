<?php

if (isset($_POST["submit"])) {
    $email = $_POST["email"];

    require_once 'dbhandler.php';
    require_once 'funtions.php';

    if (emptyEmailInput($email) !== false) {
        $currentPage = $_SERVER["REQUEST_URI"];
        header("Location: ../login.php?error=emptyinput&return=" . urlencode($currentPage));
        exit();
    }

    addEmail($conn, $email);
}