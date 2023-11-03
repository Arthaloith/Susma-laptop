<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbhandler.php';
    require_once 'funtions.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("Location: ../php/login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    header("location: ../php/index.php");
    exit();
}