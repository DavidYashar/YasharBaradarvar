<?php
define('SERVER','localhost');
define("USER", 'root');
define('PASSWORD', '');
define('DATABASE', 'test');

$conn = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

if(!$conn){
    die("connection failed");
}else{
    echo "connection success<br>";
}


if(!isset($_POST['username'], $_POST['password'], $_POST['email'])){
    exit('empty Field(s)');
}

if(empty($_POST['username'])|| empty($_POST['password'])|| empty($_POST['email'])){
    exit('values empty');
}

if($stmt = $conn->prepare('SELECT id, password FROM `users` WHERE username=?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();


if($stmt->num_rows>0){
    echo "username already exists, try again";
}
else{
   if($stmt= $conn->prepare("INSERT INTO `users`(username, password, email) VALUES(?, ?, ?) ")){
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
    $stmt->execute();
    echo "successfully registered";
   }
   else{
    echo "error occured";
   }
}
$stmt->close();
}
else{
    echo "error occured";
}
$conn->close();


?>
