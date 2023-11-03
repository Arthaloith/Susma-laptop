<?php
    include_once './template/header.php';
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
    <link rel="stylesheet" type="text/css" href="../css/cart.css">
    <script src="https://kit.fontawesome.com/f1e51c2d13.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Shopping Cart</h1>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../assets/products/pro1.jpg" width="90px" height="90px" alt=""></td>
                    <td>SusPhone X1</td>
                    <td>9,999$</td>
                    <td><input type="number" value="1"></td>
                    <td>9,999$</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../assets/products/pro1.jpg" width="90px" height="90px" alt=""></td>
                    <td>SusPhone X1</td>
                    <td>9,999$</td>
                    <td><input type="number" value="1"></td>
                    <td>9,999$</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../assets/products/pro1.jpg" width="90px" height="90px" alt=""></td>
                    <td>SusPhone X1</td>
                    <td>9,999$</td>
                    <td><input type="number" value="1"></td>
                    <td>9,999$</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="../assets/products/pro1.jpg" width="90px" height="90px" alt=""></td>
                    <td>SusPhone X1</td>
                    <td>9,999$</td>
                    <td><input type="number" value="1"></td>
                    <td>9,999$</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>


        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>9,999$</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>9,999$</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>
</body>
</html>

<?php
    include_once './template/newsletter.php'
?>


<?php
    include_once './template/footer.php'
?>