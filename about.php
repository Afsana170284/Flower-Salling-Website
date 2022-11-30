<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Fast delevary Of Pritty flowers.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Fresh and Beautiful flower.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>The Best Flower salling Website</p>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="pic-1.png" alt="">
            <p>Second time ordering flowers from Online Flower Shop AE and they always deliver the promise! Happy customer highly recommended!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Hania</h3>
        </div>

        <div class="box">
            <img src="pic-2.png" alt="">
            <p>It’s the second year I’ve used the services of the onlineflowershop and they’re always on time and they always deliver the exact thing you order from the photo.
                 Very good when you want to wish a special happy birthday to a friend that is away. Thank you!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mishal</h3>
        </div>

        <div class="box">
            <img src="pic-3.png" alt="">
            <p>Thank you for a great service. The flowers were ordered for my WIFE Afsana special birthday.
                As I’m in the GERMANY you made it simple for me to place my order from here. She is delighted with her surprise delivery today.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Awais Shafiq</h3>
        </div>

        <div class="box">
            <img src="pic-4.png" alt="">
            <p>Great flowers delivery excellent and on time very pleased have used them twice now and will do in the future</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Amna</h3>
        </div>

        <div class="box">
            <img src="pic-5.png" alt="">
            <p>Dealing with flowershop.ae has always been a pleasure. Flower arrangements are BEAUTIFUL. 
                Deliveries are done timeously and efficiently. WELL DONE and keep you the VERY GOOD work ethic. Much appreciated. 🌺🌺🌺</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="pic-6.png" alt="">
            <p>5 stars. Thank you very much</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Fatema</h3>
        </div>

    </div>

</section>


<?php @include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>