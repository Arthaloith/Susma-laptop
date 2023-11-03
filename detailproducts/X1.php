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
        <img src="../assets/products/X1/X1-1.jpg" width="50%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="../assets/products/X1/X1-1.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/X1/X1-2.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/X1/X1-3.jpg" width="50%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6><a href="../php/product.php">Product</a> / Susma X1</h6>
        <h4>Susma X1</h4>
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
        <span><h4>Introducing the Susma X1, an exquisite anniversary phone designed to commemorate a special milestone in technological innovation. Crafted with precision and elegance, the Susma X1 merges cutting-edge features with a touch of nostalgia, making it a true collector's item.</h4>
        
        <p><b>Key Features:</b></p>
        <ul>
            <li><b>Design:</b> <br>The Susma X1 showcases a seamless blend of classic aesthetics and modern design elements. Its sleek, premium body is encased in a lustrous metal frame, exuding a timeless charm. The phone's back panel is adorned with a unique anniversary logo, emphasizing its exclusive status.</li>
            <li><b>Display:</b> <br>Featuring a generous display, the Susma X1 boasts a large, edge-to-edge OLED screen that immerses users in vibrant visuals. The display is equipped with advanced HDR technology, ensuring stunning color accuracy, deep contrasts, and enhanced viewing angles.</li>
            <li><b>Performance:</b> <br>Underneath its elegant exterior, the Susma X1 houses a powerhouse of performance. Powered by the latest generation chipset, it delivers exceptional speed, responsiveness, and efficiency. Multitasking is a breeze with ample RAM and storage options, enabling users to seamlessly navigate between apps and store their precious memories.</li>
            <li><b>Software:</b> <br>Running on the latest iteration of Susma's proprietary operating system, the Susma X1 offers a smooth and intuitive user experience. The software is optimized for enhanced performance and packed with innovative features, including advanced security options, personalized AI recommendations, and a vast ecosystem of apps and services.</li>
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