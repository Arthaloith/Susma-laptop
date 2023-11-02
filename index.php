<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amogus store</title>
    <link rel="stylesheet" type="text/css" href="css/template/base.css">
    <link rel="stylesheet" type="text/css" href="css/template/header.css">
    <link rel="stylesheet" type="text/css" href="css/template/footer.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="js/loginpanel.js"></script>
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header">
        <a href="#" class="logo"><img src="assets/sus.jpg" alt="" style="width: 50px; height: 40px;"></a>
        <div>
            <ul class="navbar">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="product.html">Products</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <?php
                    if (isset($_SESSION["userid"])) {
                        echo "<li><a href='incl/profile.php'>Profile</a></li>";
                        echo "<li><a href='incl/logout.php'>Logout</a></li>"; 
                    } 
                ?>
                <li><a href="signup.php"><i class="fa-solid fa-user-plus"></i></a></li>
                <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a></li>
            </ul>
        </div>
    </section>
    
    <section class="home">
        <h4>Help Jerma settle his debt.</h4>
        <h2>By paying for garbage phones!</h2>
        <a href="product.html" class="button">Go bankrupt!</a>
    </section>

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