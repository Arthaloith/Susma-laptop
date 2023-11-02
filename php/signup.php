<?php
    include_once './template/header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/template/base.css">
    <link rel="stylesheet" type="text/css" href="../css/template/header.css">
    <link rel="stylesheet" type="text/css" href="../css/template/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(../assets/bg1.jpg);">
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="signup-form">
        <h2 style="color: aqua;">Sign Up</h2>
        <form action="incl/signup.php" method="post">
            <input type="text" name="name" placeholder="fullname...">
            <input type="text" name="email" placeholder="email...">
            <input type="text" name="uid" placeholder="username...">
            <input type="password" name="pwd" placeholder="password...">
            <input type="password" name="pwdrepeat" placeholder="repeat password...">
            <button type="submit" name="submit">Sign up</button>
        </form>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Choose a proper username!</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose a proper email!</p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords don't match!</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, try again!</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                } else if ($_GET["error"] == "usernameoremailtaken") {
                    echo "<p>Username or email already taken!</p>";
                }
            }
        ?>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>

<?php
    include_once './template/footer.php'
?>