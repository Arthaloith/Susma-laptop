<?php
    include_once '../php/template/header.php'
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
    <link rel="stylesheet" type="text/css" href="../css/detailpro.css">
    <link rel="stylesheet" type="text/css" href="../css/product.css">
    <script src="js/loginpanel.js"></script>
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body>
    
<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="../assets/products/chadphone.jpg" width="50%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="../assets/products/chadphone.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/Omega Based Susma Chadphone/1.jpg" width="70%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/Omega Based Susma Chadphone/2.jpg" width="70%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6><a href="../php/product.php">Product</a> / Susma Lite</h6>
        <h4>Susma Lite</h4>
        <h2>$9,999</h2>
        <select name="" id="">
            <option value="">Select Model</option>
            <option value="">69GB</option>
            <option value="">420GB</option>
            <option value="">666GB</option>
            <option value="">69420GB</option>
        </select>
        <input type="number" min="1" value="1">
        <button class="normal">Add to cart</button>
        <h4>Product details</h4>
        <span><h4>Introducing the Susma Lite, a budget-friendly smartphone designed to offer essential functionality and usability without compromising on quality. The Susma Lite is the perfect choice for individuals seeking a reliable and affordable device that meets their everyday communication and multimedia needs.</h4>
        
        Key Features:
        <ul>
            <li><b>Design:</b> <br>The Susma Lite sports a sleek and compact design that fits comfortably in your hand or pocket. It features a lightweight build and a streamlined profile, making it easy to carry and use on the go. The phone's design focuses on simplicity and functionality, ensuring a user-friendly experience.</li>
            <li><b>Display:</b> <br>The Susma Lite incorporates a vibrant display that brings your content to life. While the specifics may vary based on the model, you can expect a clear and crisp screen that allows for enjoyable viewing of photos, videos, and web browsing. The display size and resolution are optimized for an immersive visual experience within the budget category.</li>
            <li><b>Performance:</b> <br>Despite its budget-friendly nature, the Susma Lite offers reliable performance for everyday tasks. It is equipped with a capable processor and sufficient RAM to handle common applications, messaging, web browsing, and multimedia playback smoothly. The phone's performance is optimized to provide a responsive and lag-free user experience.</li>
            <li><b>Battery Life:</b> <br>The Susma Lite is designed with energy efficiency in mind to ensure a long-lasting battery life. While the specifics may vary depending on the model, you can expect a battery that provides ample power to keep you connected throughout the day. The phone's power management features help maximize battery efficiency, allowing you to stay productive and entertained for longer periods.</li>
        </ul>
        </span>
    </div>
</section>
<script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
    }
</script>
</body>
</html>
<?php
    include_once '../php/template/newsletter.php'
?>

<?php
    include_once '../php/template/footer.php'
?>