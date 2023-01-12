<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO `users`(`name`, `email`, `phone`, `comment`) VALUES('$name', '$email', '$phone', '$comment')";

    $result = $conn->query( $query);

    if($result){
        header('location: contact_us.php? message= done');
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href='css/contactStyles.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
  
    
    
    <title>contact us</title>
</head>
<body>
<section id="myHeader">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">FREE COLLEGE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Universities
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="mit.php">All about MIT</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="harvard.php">All about Harvard</a>
                    
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="contact_us.php">contact us</a>
                </li>
              </ul>
              <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->
            </div>
          </nav>
    </section>


    <div class='form'>
    <form  method='POST' action='contact_us.php'>
    <label for="name">Name:</label><br>
    <input type='text' name='name' placeholder='enter your name'><br><br>
    <label for='email'>Email:</label><br>
    <input type='text' name='email' placeholder='your email'><br><br>
    <label for='phone'>Contact number:</label><br>
    <input type='text' name='phone' placeholder='contact number'><br><br>
    <label for='comment'>comment:</label><br>
    <input type="text" name='comment' placeholder='what is your request?'><br><br>
    <input id='submit' type="submit" name='submit' value='submit'>
    </form>
    </div>
    
    <div id='success'>
        <?php if(isset($_GET['message'])== 'done'){
         echo '<h4>Your info is registered, Thanks<br>
         We will contact you as soon as possible.</h4>';

        } ?>
    </div>

   

    <div class="info">
     <h3>How can we help you?</h3><br><br>
     <p>Here in this section, you can ask your question or any concerns <br>
    That you might have regarding the process of payment, or the certificates<br>
We will answer you through call back or email. </p>
    </div>


    <footer>
<div class="footer">
<div class="row">
<a href="https://www.facebook.com/Yashar.Baradar" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
</div>

<div class="row">
<ul>
<li><a href="">Contact us</a></li>
<li><a href="#">Universities</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>

</ul>
</div>

<div class="row">
Yashar Baradarvar Copyright © 2023 
</div>
</div>
</footer>



<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
