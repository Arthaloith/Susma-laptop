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
        <img src="../assets/products/Elite/Elite-1.jpg" width="50%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="../assets/products/Elite/Elite-1.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/Elite/Elite-2.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/Elite/Elite-3.jpg" width="50%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6><a href="product.php">Home</a> / Susma Elite</h6>
        <h4>Susma Elite</h4>
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
        <span><h4>Introducing the Susma Elite, a rugged phone specially designed to withstand the challenges of an active lifestyle and cater to the needs of sports enthusiasts. Built to endure extreme conditions, the Susma Elite combines durability, performance, and sport-centric features, making it the perfect companion for outdoor adventures.</h4>
        
        <p><b>Key Features:</b></p>
        <ul>
            <li><b>Design and Durability:</b> <br> The Susma Elite boasts a robust and rugged design that can withstand the toughest environments. It features a reinforced frame, impact-resistant materials, and certified protection against water, dust, and shock. The phone's exterior is ergonomically designed, ensuring a comfortable grip even during intense activities.</li>
            <li><b>Display:</b> <br> Equipped with a high-resolution display, the Susma Elite provides crystal-clear visuals, allowing users to view maps, track their progress, and stay connected while on the move. The display is protected by scratch-resistant glass or a specialized rugged screen, ensuring durability even in harsh outdoor conditions.</li>
            <li><b>Sport-Centric Features:</b> <br> The Susma Elite is packed with features tailored specifically for sports enthusiasts. It includes built-in GPS for accurate tracking of your location and routes, making it ideal for hiking, running, and cycling. The phone may also have a barometer, altimeter, and compass to provide real-time data on altitude, atmospheric pressure, and direction.</li>
            <li><b>Additional Features:</b> <br> The Susma Elite may include other useful features such as an SOS button for emergencies, a dedicated sports app ecosystem, heart rate monitoring, sleep tracking, and compatibility with popular fitness trackers and accessories.</li>
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