<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["userid"])) {
    header("Location: ../login.php");
    exit();
}

if (isset($_POST["update_profile"])) {
    require_once 'dbhandler.php';

    // Get the user ID from the session
    $userId = $_SESSION["userid"];
    
    // Get the updated profile information from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];

    // Update the user information in the database
    $sql = "UPDATE users SET usersName = ?, usersEmail = ?, usersUid = ? WHERE usersId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // Handle the error appropriately
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $username, $userId);
    mysqli_stmt_execute($stmt);

    // Redirect back to the profile page with a success message
    header("Location: ../php/profile.php?update=success");
    exit();
} else {
    // Handle the case when the form is not submitted
    header("Location: ../profile.php");
    exit();
}