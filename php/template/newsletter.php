<link rel="stylesheet" type="text/css" href="../css/template/base.css">
<link rel="stylesheet" href="../css/newsletter.css">

<section class="newsletter">
    <div class="newstext">
        <h4>Give us your email or Jerma will break into your house</h4>
        <p>You get nothing by giving us your email, in fact we gonna nag you to buy stuffs from us everyday</p>
    </div>
    <div class="form">
        <form action="incl/newsletter.php" method="post">
            <input type="text" name="email" id="email" placeholder="Enter your email...">
            <button type="submit" name="submit">Subscribe</button>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Please enter email!</p>";
                } 
            }
            ?>
    </div>
</section>