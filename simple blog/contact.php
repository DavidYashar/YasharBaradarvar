<?php
include "connect.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO `users`(`name`, `email`, `phone`, `comment`) VALUES('$name', '$email', '$phone', '$comment')";

    $result = $conn->query($query);

    if($result){
        header('location: contact.php? message= info received');
    }else{
        header('location: contact.php? message= error');
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contactStyle.css">
    <title>contact</title>
</head>
<body>
<header>
        <ul class="header">
         <li><a href="index.php">HOME</a></li>
         <li><a href="https://colorlib.com/wp/" target="_blank">ARTICLES</a></li>
         <li><a href="contact.php">CONTACT</a></li>
         <li><div class="logo">
        <img src="images/logo.jpg" >
            </div></li>
        </ul>

        <div  onClick='appear()' class="logo-response" >
        <img onClick='appear()' src="images/logo.jpg" >
            </div>
        </header>


    <form method="POST" action="contact.php">
        <label for ="name">Name:</label><br>
        <input type="text" name="name"><br><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email"><br><br>
        <label for="phone">Phone:</label><br>
        <input type="text" name="phone"><br><br>
        <label for="comment">Comment:</label><br>
        <textarea type="text" name="comment" cols="20" rows="5"></textarea><br>
        <input id="submit" type="submit" name="submit" value="send us">
    </form>

    <div class="success">
        <?php if(isset($_GET['message']) =='info received'){
         echo '<h3>Your contact info received. Thanks.<br>
         We will be in touch shortly.</h3>';

        } ?>

    </div>


    <div class="info">
     <h3>How can we help you?</h3>
     <p>Here in this section, you can ask your question or any concerns 
    That you might have regarding the process of payment, or the certificates
We will answer you through call back or email. </p>
    </div>


    <footer>
            <div class="footer">
              <h3><a href="contact.php">contact us</a></h3>
              <h3><a href="https://colorlib.com/wp/templates/">templates</a> </h3>
              <h3><a href="index.php">home</h3></a>
              <h5>Yashar Baradarvar | 2023</h5>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="scripts.js"></script>
</body>
</html>