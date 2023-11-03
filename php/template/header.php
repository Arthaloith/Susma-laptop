<?php
    session_start();

    // Function to check if the current page is the active page
    function isActivePage($page)
    {
        $currentURL = $_SERVER['PHP_SELF'];
        if (strpos($currentURL, $page) !== false) {
            return 'active';
        }
        return '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amogus store</title>
    <link rel="stylesheet" type="text/css" href="../../css/home.css">
    <link rel="stylesheet" type="text/css" href="../../css/template/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/template/footer.css">
    <link rel="stylesheet" type="text/css" href="../../css/home.css">
    <script src="js/loginpanel.js"></script>
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header">
        <a href="../php/index.php" class="logo"><img src="../assets/sus.jpg" alt="" style="width: 50px; height: 40px;"></a>
        <div>
            <ul class="navbar">
                <li><a href="index.php" class="<?php echo isActivePage('index.php'); ?>">Home</a></li>
                <li><a href="product.php" class="<?php echo isActivePage('product.php'); ?>">Products</a></li>
                <!-- <li><a href="news.php" class="<?php echo isActivePage('news.php'); ?>">News</a></li> -->
                <li><a href="about.php" class="<?php echo isActivePage('about.php'); ?>">About</a></li>
                <li><a href="contact.php" class="<?php echo isActivePage('contact.php'); ?>">Contact</a></li>
                <?php
                    if (isset($_SESSION["userid"])) {
                        echo "<li><a href='../php/profile.php' class='" . isActivePage('../php/profile.php') . "'>Profile</a></li>";
                        echo "<li><a href='../incl/logout.php'>Logout</a></li>"; 
                    } else {
                        echo "<li><a href='login.php' class='" . isActivePage('login.php') . "'><i class='fas fa-sign-in-alt'></i></a></li>";
                        echo "<li><a href='signup.php' class='" . isActivePage('signup.php') . "'><i class='fas fa-user-plus'></i></a></li>";
                    }
                ?>
                <li><a href="cart.php" class="<?php echo isActivePage('cart.php'); ?>"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <!-- <li><a href="signup.php"><i class="fa-solid fa-user-plus"></i></a></li>
                <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a></li> -->
            </ul>
        </div>
    </section>
</body>
</html>