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
                <img src="../assets/products/ultra/ultra-1.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/ultra/ultra-2.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/ultra/ultra-3.jpg" width="50%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6><a href="product.php">Home</a> / Susma Ultra</h6>
        <h4>Susma Ultra</h4>
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
        <span><h4><h4>The Susma ProMax is a premium smartphone specifically designed to cater to the needs and preferences of gamers, offering a high-performance mobile gaming experience. It combines cutting-edge technology, powerful hardware, and gamer-centric features to elevate mobile gaming to new heights.</h4>
        
        <p><b>Key Features:</b></p>
        <ul>
            <li><b>Design:</b> <br>The Susma ProMax features a sleek and futuristic design, crafted with premium materials to ensure durability and aesthetics. It has a comfortable grip and ergonomic design, allowing gamers to hold and operate the phone with ease during extended gaming sessions. The device incorporates LED lighting accents and customizable RGB lighting, adding a touch of gaming flair.</li>
            <li><b>Display and Performance:</b> <br>The Susma ProMax boasts a large, high-resolution display with a high refresh rate, providing smooth and immersive visuals. The screen utilizes advanced display technologies, such as HDR support and adaptive refresh rates, to deliver vibrant colors and crisp details during gaming sessions. The phone is powered by a top-of-the-line processor and ample RAM, ensuring seamless performance and swift multitasking capabilities.</li>
            <li><b>Gamer-centric Features:</b> <br>The Susma ProMax is equipped with a range of features tailored to enhance the gaming experience. It offers dedicated gaming modes and optimization settings that prioritize performance, minimize distractions, and reduce latency. The phone also incorporates advanced cooling mechanisms, such as vapor chambers or heat sinks, to prevent overheating during intense gaming sessions.</li>
            <li><b>Controls and Input:</b> <br>Recognizing the importance of precise controls, the Susma ProMax provides customizable buttons and triggers specifically designed for gaming. These physical controls can be mapped to specific in-game functions, allowing gamers to have more precise control over their gameplay. Additionally, the device supports external gaming controllers and accessories for those who prefer a traditional console-like experience.</li>
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