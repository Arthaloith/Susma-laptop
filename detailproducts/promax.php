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
                <img src="../assets/products/chadphone.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/promax/1.jpg" width="50%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../assets/products/promax/2.jpg" width="50%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6><a href="../php/product.php">Home</a> / Susma ProMax</h6>
        <h4>Susma ProMax</h4>
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
        <span><h4>Introducing the Susma ProMax, a premium smartphone designed with a focus on accessibility and user-friendly features, catering to individuals who may have varying levels of technological experience or capability. It aims to empower users by providing a seamless and intuitive mobile experience.</h4>
        
        <p><b>Key Features:</b></p>
        <ul>
            <li><b>Design:</b> <br>The Susma ProMax showcases a sleek and modern design that exudes sophistication. It features a premium build quality, utilizing a combination of durable materials such as metal and glass, ensuring a robust and stylish device. The phone is ergonomically designed, providing a comfortable grip and easy handling for users.</li>
            <li><b>User Interface:</b> <br>The Susma ProMax incorporates a user interface that is designed to be intuitive and easy to navigate. Its operating system features a clean and organized layout, with large icons and clear labels, making it effortless to locate and access various applications and settings. The interface prioritizes simplicity, ensuring that users can enjoy a seamless smartphone experience.</li>
            <li><b>Sus-sistant:</b> <br>The Susma ProMax comes equipped with an array of assistive features to cater to users with diverse needs. It offers customizable accessibility options, including adjustable font sizes, high contrast themes, and speech-to-text functionality. The phone also provides voice-guided instructions and prompts, assisting users in performing tasks and navigating through the device.</li>
            <li><b>Enhanced Communication:</b> <br>The Susma ProMax places a strong emphasis on communication features to ensure seamless connectivity. It offers simplified calling and messaging interfaces, with larger buttons and clear prompts for ease of use. The device also integrates with various communication platforms, enabling users to stay connected through voice and video calls, messaging, and social media applications.</li>
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