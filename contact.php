<?php
include "connect.php";

// && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address'])
// && !empty($_POST['service']) && !empty($_POST['date'])

$name = $email = $phone = $address = $services = $date = $comment = "";
$nameErr = $emailErr = $phoneErr = $addressErr = $servicesErr = $dateErr = "";

if(isset($_POST['cancel'])){
    header('location: index.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        $nameErr = "please enter your name";
    }else{
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
   if(empty($_POST['email'])){
    $emailErr = "please enter your email";
   }else{
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
   }
    if(empty($_POST['phone'])){
        $phoneErr = "Please enter your phone";
    }else{
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(empty($_POST['address'])){
        $addressErr = "Please enter your address";
    }else{
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(empty($_POST['services'])){
        $servicesErr= "please enter your requested service";
    }else{
        $services = filter_input(INPUT_POST, 'services', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(empty($_POST['date'])){
        $dateErr = "Please enter your prefered date";
    }else{
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
   
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);

  

    $query = "INSERT INTO `request`(`name`, `email`, `phone`, `address`, `services`, `date`, `comment`) VALUES('$name', '$email', '$phone', 
    '$address', ' $services', ' $date', '$comment')";

    $result = $conn->query($query);

    if($result){
        header("location: index.php? message= info submitted");
    }else{
        header("location: contact.php? message= error occured, try again");
    }
}
if(isset($_POST['cancel'])){
    header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='css/contactStyle.css'>
    <title>contact</title>
</head>
<body>
    <div>
        <img src="images/header-image.png">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <label for="name">Name</label><br>
                    
                    <input type="text" name="name"  required><br>
                    <label for="email">email</label><br>
                    <input type="text" name="email" required><br>
                    <label for="phone">phone</label><br>
                    <input type="text" name="phone" required><br>
                    <label for="address">address</label><br>
                    <input type="text" name="address" required><br>
                    <label for="address">services</label><br>
                    <select id="services" name="services" required>
                    <option value=""></option>
                        <option value="cleaner">cleaner</option>
                        <option value="Home-moving">Home-moving</option>
                        <option value="fine-art">fine-art</option>
                        <option value="furniture-move">furniture-move</option>
                        <option value="delivery">delivery</option>
                        <option value="storage-move">storage-move</option>
                    </select>
                    <label for="date">date</label><br>
                    <input type="date" name="date" required><br>
                    <label for="comment">comment</label><br>
                    <textarea name="comment" cols="20" rows="10" placeholder="write here any additional request..."></textarea>
                    
                    <div >
                <!-- <input onclick="cancel()" id="cancel" name="cancel" type="submit" value="cancel"> -->
                     <input id="submit" name="submit" type="submit" value="submit">
                     
                    </div>
                </form>
                <input onclick="cancel()" id="cancel" name="cancel" type="submit" value="cancel">
                </div>

                <div class="error">
                <span><?php echo $nameErr; ?></span><br><br>
                <span><?php echo $emailErr; ?></span><br><br>
                <span><?php echo $addressErr; ?></span><br><br>
                <span><?php echo $phoneErr; ?></span><br><br>
                <span><?php echo $dateErr; ?></span><br><br>
                <span><?php echo $servicesErr; ?></span><br><br>
                </div>
                <script src="scripts.js"></script>
</body>
</html>