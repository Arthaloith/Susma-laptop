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
                <img src="../assets/products/mys-plus/mys-plus-1.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/mys-plus/mys-plus-2.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/mys-plus/mys-plus-3.jpg" width="50%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6><a href="../php/product.php">Home</a> / Susma Mystery Plus</h6>
        <h4>Susma Mystery Plus</h4>
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
        <span><h4>Introducing The Susma Mystery Plus, an enigmatic and intriguing flip phone that has gained attention for its unique design and mysterious features. While details about the phone are scarce and shrouded in secrecy.</h4>
        
        <p><b>Key Features:</b></p>
        <ul>
            <li><b>Design:</b> <br>The Susma Mystery Plus exudes an aura of mystique with its sleek and minimalist design. Its exterior is crafted from a combination of high-quality materials, such as polished metal and tempered glass, giving it a luxurious and futuristic appearance. The phone's flip mechanism is smooth and satisfying, adding an element of nostalgia to its overall charm.</li>
            <li><b>Display:</b> <br>One of the most captivating aspects of the Susma Mystery Plus is its display. When the phone is closed, the display remains hidden, leaving users to wonder what secrets lie beneath. However, when the device is opened, the screen magically comes to life, revealing a vibrant and edge-to-edge OLED panel. The resolution is rumored to be incredibly sharp, providing an immersive visual experience.</li>
            <li><b>User Interface:</b> <br>The phone's user interface is said to be highly intuitive yet enigmatic, featuring a custom operating system that is unique to the Susma Mystery Plus. Rumors suggest that navigating through the menus and features of the phone is an experience in itself, with hidden shortcuts and gestures waiting to be discovered.</li>
            <li><b>Battery Life:</b> <br>Another mysterious aspect of the Susma Mystery Plus is its battery life. While exact details are unknown, rumors suggest that the phone's battery can last for an exceptionally long time, defying the limitations of typical smartphones. Some even claim that the phone harnesses an unknown power source, enabling it to operate for days or even weeks without recharging.</li>
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