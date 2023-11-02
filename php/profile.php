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

// Display the user profile information
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
    <script src="js/loginpanel.js"></script>
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Profile Page</h1>
    <h2>Welcome, <?php echo $name; ?>!</h2>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Username:</strong> <?php echo $username; ?></p>

    <!-- Add additional profile information and customization options as needed -->

    <a href="logout.php">Logout</a> <!-- Provide a logout link -->
</body>
</html>

<?php
    include_once './template/footer.php'
?>