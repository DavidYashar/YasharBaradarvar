<?php
define("SERVER", 'localhost');
define("USERNAME", 'root');
define("PASSWORD", '');
define("DATABASE", 'freecollege');

$conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

// if($conn){
//   header('location: contact_us.php? message= connection success');
// }
?>
