<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Project</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> Grocery </a>

    
    
   

   <nav class="navbar">
    <a href="login.php">login</a>
    <a href="register.php">register</a>

   </nav>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">300frw/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">100frw/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">5000frw/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : 5100frw/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <form action="login.php" class="login-form">
        <h3>login now</h3>
        <input type="email" name="email" placeholder="your email" class="box">
        <input type="password" name="pass" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>organic</span> products for your</h3>
        <p>Organica is where early adopters and innovation sockers find lively, imaginative tech before it hits the mainstream.</p>
        <a href="login.php" class="btn">log in</a>
    </div>

</section>
        <div class="box">
            <img src="image/blog-2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st april, 2024 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Organica Is Where Early Adopters And Innovation Sockers Find Lively, Imaginative Tech Before It Hits The Mainstream.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 3rd april, 2024 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Organica Is Where Early Adopters And Innovation Sockers Find Lively, Imaginative Tech Before It Hits The Mainstream.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Grocery <i class="fas fa-shopping-basket"></i> </h3>
            <p>Hello my name is Hagumubuzima noella. I made this website for practice purpose only, I hope you all enjoy this project.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +25078928374 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +25072938746 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> hagnoella@gmail.com</a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Greater kigali,   Rwanda - 4045po:box </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> facebook </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> instagram </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> thread </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> tiktok </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> noella </span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>