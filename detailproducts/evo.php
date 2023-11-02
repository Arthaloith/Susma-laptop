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
        <img src="../assets/products/evo/EVO-1.jpg" width="50%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="../assets/products/evo/EVO-1.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/evo/EVO-2.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/evo/EVO-3.jpg" width="50%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6><a href="product.php">Home</a> / Susma EVO</h6>
        <h4>Susma EVO</h4>
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
        <span><h4>Introducing the Susma Evo, an exciting collaboration between Susma and EVE Online, two leaders in their respective industries. This unique smartphone combines the cutting-edge technology of Susma with the immersive universe of the popular sci-fi MMORPG, EVE Online, to offer an extraordinary gaming and communication experience.</h4>
        
        <p><b>Key Features:</b></p>
        <ul>
            <li><b>Design:</b> <br>The Susma Evo showcases a sleek and futuristic design inspired by the aesthetic elements of EVE Online. It features a premium build quality with a blend of metal and glass, creating a visually striking and ergonomic device. The back panel may incorporate EVE Online-inspired artwork, such as iconic spacecraft, celestial landscapes, or symbols representing the game's universe.</li>
            <li><b>Display:</b> <br>Immerse yourself in the EVE Online universe with the Susma Evo's stunning display. It boasts a high-resolution screen with vibrant colors and deep contrasts, ensuring an immersive visual experience. Whether you're exploring vast galaxies or engaging in intense space battles, the display brings EVE Online's captivating world to life with stunning clarity.</li>
            <li><b>Performance:</b> <br>Powered by state-of-the-art hardware, the Susma Evo delivers exceptional performance to meet the demands of both gaming and everyday smartphone usage. It is equipped with a powerful processor, ample RAM, and advanced graphics capabilities, allowing for smooth gameplay, seamless multitasking, and fast app loading times.</li>
            <li><b>EVE Online Integration:</b> <br>The Susma Evo comes bundled with exclusive EVE Online content and features, enhancing the overall gaming experience. It may include a dedicated EVE Online app or launcher, providing quick access to the game, news, and updates. The integration could also offer exclusive in-game bonuses, special events, or access to unique EVE Online merchandise.</li>
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