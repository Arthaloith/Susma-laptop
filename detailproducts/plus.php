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
                <img src="../assets/products/plus/plus-1.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/plus/plus-2.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/plus/plus-3.jpg" width="50%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6><a href="../php/product.php">Home</a> / Susma Plus</h6>
        <h4>Susma Plus</h4>
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
        <span><h4>Introducing The Susma Plus, a smartphone that stands as a formidable alternative to the iPhone, offering a unique set of features and a distinct philosophy. Designed to provide users with a different experience from mainstream smartphones, the Susma Lite embraces simplicity, affordability, and user freedom.</h4>
        
        <p><b>Key Features:</b></p>
        <ul>
            <li><b>Design:</b> <br>The Susma Plus sports a sleek and minimalist design, with clean lines and a lightweight construction. It features a sturdy yet comfortable build, crafted from high-quality materials that ensure durability. The phone's bezels are slim, maximizing the screen-to-body ratio and providing an immersive viewing experience. The overall aesthetic of the Susma Plus is understated and elegant, catering to those who appreciate simplicity.</li>
            <li><b>Operating System:</b> <br>Unlike the iPhone, the Susma Plus operates on an open-source mobile operating system, offering users greater customization and control. It runs on a user-friendly interface that allows for easy navigation and personalization. The operating system supports a wide range of apps and services, providing users with flexibility and freedom of choice.</li>
            <li><b>Affordability:</b> <br>One of the key selling points of the Susma Plus is its affordability. It aims to provide a high-quality smartphone experience at a more accessible price point compared to premium devices like the iPhone. The Susma Plus offers value for money without compromising on essential features, making it an attractive option for budget-conscious individuals or those seeking an alternative to expensive flagship phones.</li>
            <li><b>Community and Support:</b> <br>One of the core principles behind the Susma Plus is fostering a community of users who contribute to its development and provide support to fellow users. The company behind the Susma Plus actively engages with its community, encouraging feedback and implementing user-driven improvements. This collaborative approach creates a sense of belonging and empowers users to shape the future of their smartphone experience.</li>
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