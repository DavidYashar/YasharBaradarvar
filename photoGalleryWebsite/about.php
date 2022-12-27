<?php
define("SERVER", 'localhost');
define("USER", 'root');
define("PASSWORD", '');
define("DATABASE", 'crud');

$conn = mysqli_connect(SERVER, USER);

if($conn){
    echo "connection success";
}else{
    echo "connection failed";
}

mysqli_select_db($conn, DATABASE);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO `users`(`name`, `email`, `phone`) VALUES('$name', '$email', '$phone')";

mysqli_query($conn, $query);


header("location: index.php#contact");

?>
