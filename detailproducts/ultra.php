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
        <h6><a href="../php/product.php">Product</a> / SusPhone Ultra</h6>
        <h4>SusPhone Ultra</h4>
        <h2>$9,999</h2>
        <select name="" id="">
            <option value="">Select Model</option>
            <option value="">69GB</option>
            <option value="">420GB</option>
            <option value="">666GB</option>
            <option value="">69420GB</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add to cart</button>
        <h4>Product details</h4>
        <span>Introducing the Susma Chadphone, the ultimate audio companion for your daily adventures! Designed with cutting-edge technology and superior craftsmanship, the Susma Chadphone delivers an exceptional audio experience while boasting a sleek and modern design.
        
        Key Features:
        <ul>
            <li>Immersive Sound Quality: Experience audio like never before with the Susma Chadphone's immersive sound quality. Equipped with high-fidelity drivers, it delivers crystal-clear highs, rich mids, and deep bass, allowing you to enjoy your favorite music with exceptional clarity and depth.</li>
            <li>Wireless Convenience: Say goodbye to tangled wires and enjoy the freedom of wireless connectivity. The Susma Chadphone features Bluetooth 5.0 technology, enabling seamless pairing with your smartphone, tablet, or other Bluetooth-enabled devices. Whether you're working out, commuting, or simply relaxing at home, you can enjoy your music without the hassle of wires.</li>
            <li>Comfortable Fit: The Susma Chadphone is designed with comfort in mind. The adjustable headband and soft, cushioned ear cups provide a snug and comfortable fit, ensuring long-lasting comfort even during extended listening sessions. The lightweight construction further enhances the wearing experience, making it ideal for all-day use.</li>
            <li>Long Battery Life: With the Susma Chadphone, you can enjoy your favorite tunes for extended periods without worrying about battery life. The built-in rechargeable battery offers an impressive playback time of up to 20 hours on a single charge, keeping you entertained throughout the day. And when it's time to recharge, simply connect the included USB cable and power up in no time.</li>
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