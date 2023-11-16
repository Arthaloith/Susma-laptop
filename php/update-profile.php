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
    <title>Update Profile</title>
    <!-- Add your CSS stylesheets and other necessary HTML head elements -->
    <linkrel="stylesheet" type="text/css" href="../css/template/base.css">
    <link rel="stylesheet" type="text/css" href="../css/template/header.css">
    <link rel="stylesheet" type="text/css" href="../css/template/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/update-profile.css">
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(../assets/bg2.jpg);">
<br>
<br>
    <div class="container">
        <h1 class="heading">Update Profile</h1>
        <div class="profile">
            <form action="../incl/update-profile.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
                </div>
                <button type="submit" name="update_profile" class="update-profile-button">Update Profile</button>
            </form>
        </div>
    </div>
    <br>
    <br><br>
</body>
</html>

<?php
include_once './template/footer.php';
?>