<?php
if (isset($_POST["delete_account"])) {
    session_start(); // Start the session
    $userId = $_SESSION["userid"]; // Get the user ID from the session
    
    require_once 'dbhandler.php';
    include_once dirname(__FILE__) . '/../incl/funtions.php';
    deleteUser($conn, $userId);
    
} else {
    header("Location: ../php/index.php");
    exit();
}
