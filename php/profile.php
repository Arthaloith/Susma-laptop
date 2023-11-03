<?php
include_once './template/header.php';
// Start a session to access session variables

// Check if the user is logged in
if (!isset($_SESSION["userid"])) {
    header("Location: login.php");
    exit();
}

// Get the user ID from the session
$userId = $_SESSION["userid"];

// Retrieve user information from the database based on the user ID
require_once '../incl/dbhandler.php';

$sql = "SELECT * FROM users WHERE usersId = ?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    // Handle the error appropriately
    exit();
}

mysqli_stmt_bind_param($stmt, "i", $userId);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    $name = $row["usersName"];
    $email = $row["usersEmail"];
    $username = $row["usersUid"];
} else {
    // Handle the case when user information is not found
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <!-- Add your CSS stylesheets and other necessary HTML head elements -->
    <link rel="stylesheet" type="text/css" href="../css/template/base.css">
    <link rel="stylesheet" type="text/css" href="../css/template/header.css">
    <link rel="stylesheet" type="text/css" href="../css/template/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
    <script src="../js/confirmdel.js"></script>
    <script src="../js/clock.js"></script>
    
</head>
<body style="background-image: url(../assets/bg2.jpg);">
<br>
<br>
    <div class="container">
        <h1 class="heading">Profile Page</h1>
        <div class="profile">
            <h2 class="welcome">Welcome, <?php echo $name; ?>!</h2>
            <div class="info">
                <p><strong>Name:</strong> <?php echo $name; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Username:</strong> <?php echo $username; ?></p>
            </div>
            <form method="POST" action="../incl/delacc.php" onsubmit="return confirmDelete();">
                <button type="submit" name="delete_account" class="delete-account-button">Delete Account</button>
            </form>
        </div>
    </div>

    <div class="clock-container">
        <h2 class="clock-heading">Random Clock</h2>
        <div id="clock" class="clock"></div>
        <div id="digital-clock"></div>
    </div>
    <br>
    <br><br>
</body>
</html>

<?php
include_once './template/footer.php';
?>