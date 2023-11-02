<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/template/base.css">
    <link rel="stylesheet" type="text/css" href="css/template/header.css">
    <link rel="stylesheet" type="text/css" href="css/template/footer.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(assets/bg1.jpg);">
    <section class="header">
        <a href="#" class="logo"><img src="assets/sus.jpg" alt="" style="width: 50px; height: 40px;"></a>
        <div>
            <ul class="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="product.html">Products</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a href="signup.php"><i class="fa-solid fa-user-plus"></i></a></li>
                <li><a href="login.html"><i class="fa-solid fa-right-to-bracket"></i></a></li>
            </ul>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="signup-form">
        <h2 style="color: aqua;">Log in</h2>
        <form action="incl/login.php" method="post">
            <input type="text" name="uid" placeholder="email or username...">
            <input type="password" name="pwd" placeholder="password...">
            <button type="submit" name="submit">Log in</button>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect username or password</p>";
                } 
            }
            ?>
        </form>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="footer">
        <footer>
            <p>&copy; 2023 Susma. All rights reserved. | Designed by <a href="https://github.com/Arthaloith">Amogus</a><br></p>
            <div class="link">
                <a href="policy.html">Privacy policy</a>
                <a href="terms.html">Terms of Service</a>
                <a href="index.html">Back to homepage</a>
            </div>    
        </footer>
    </section>
</body>
</html>