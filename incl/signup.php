<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    require_once 'dbhandler.php';
    require_once 'funtions.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("Location: ../php/signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("Location: ../php/signup.php?error=invaliduid");
        exit();
    }
    
    if (invalidEmail($email) !== false) {
        header("Location: ../php/signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("Location: ../php/signup.php?error=mismatchedpassword");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("Location: ../php/signup.php?error=usernameoremailtaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
} else {
    header("Location: ../php/signup.php");
    exit();
}
