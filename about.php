<?php

include 'config.php';

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
   <title>EZ Art Gallery</title>
   <link rel="shortcut icon" href="images/EZArt_logo.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
</div>
<section class="about">
   <div class="flex">
      <div class="image">
         <img src="images/EZArt_logo.png" alt="">
      </div>
      <div class="content">
         <h3>EZ Art Gallery</h3>
         <p>We wanted to make an online platform for people who are starting out to be artists and visualizing if they can ever make a living out of their passion. We would love to give a helping hand to artist to easily find clients and connect with them or a marketplace where they can post their art and be posted with a price.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>
   </div>
</section>
<section class="artists">
   <h1 class="title">Talented Artists</h1>
   <div class="box-container">
      <div class="box">
         <img src="images/profile1.jpg" alt="">
         <div class="share">
         <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
         <a href="https://www.linkedin.com/home"><i class="fab fa-linkedin"></i></a>
         </div>
         <h3>Samantha</h3>
      </div>
      <div class="box">
         <img src="images/profile2.jpg" alt="">
         <div class="share">
         <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
         <a href="https://www.linkedin.com/home"><i class="fab fa-linkedin"></i></a>
         </div>
         <h3>Joe</h3>
      </div>
      <div class="box">
         <img src="images/profile3.jpg" alt="">
         <div class="share">
         <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
         <a href="https://www.linkedin.com/home"><i class="fab fa-linkedin"></i></a>
         </div>
         <h3>Joze</h3>
      </div>
      <div class="box">
         <img src="images/profile4.jpg" alt="">
         <div class="share">
         <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
         <a href="https://www.linkedin.com/home"><i class="fab fa-linkedin"></i></a>
         </div>
         <h3>Aurora</h3>
      </div>
      <div class="box">
         <img src="images/profile5.jpg" alt="">
         <div class="share">
         <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
         <a href="https://www.linkedin.com/home"><i class="fab fa-linkedin"></i></a>
         </div>
         <h3>Eulia</h3>
      </div>
      <div class="box">
         <img src="images/profile6.jpg" alt="">
         <div class="share">
         <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
         <a href="https://www.linkedin.com/home"><i class="fab fa-linkedin"></i></a>
         </div>
         <h3>Kori</h3>
      </div>
   </div>
</section>

<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>