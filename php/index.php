<?php
    include_once './template/header.php';
    // Check if the 'success' query parameter exists and is set to 'true'
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    // Display an alert message
    echo '<script>alert("Account deleted successfully!");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amogus store</title>
    <link rel="stylesheet" type="text/css" href="../css/template/base.css">
    <link rel="stylesheet" type="text/css" href="../css/template/header.css">
    <link rel="stylesheet" type="text/css" href="../css/template/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="home">
        <h4>Help Jerma settle his debt.</h4>
        <h2 style="color:red;">By paying for garbage phones!</h2>
        <a href="product.php" class="button">Go bankrupt!</a>
    </section>
</body>
</html>
<?php
    include_once './template/newsletter.php'
?>


<?php
    include_once './template/footer.php'
?>