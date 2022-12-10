<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])){
  $conn = mysqli_connect('localhost', 'root', '', 'test1') or die("invalid connect: ".mysqli_connect_error());
  if(isset($_POST['name'])&& isset($_POST['age'])&& isset($_POST['email'])&& isset($_POST['bgroup'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $bgroup = $_POST['bgroup'];

    $sql = "INSERT INTO `donate`(`name`, `age`, `email`, `bgroup`) VALUES('$name', '$age', '$email', '$bgroup')";

    $query = mysqli_query($conn, $sql);

    if($query){
      echo "data entered successfully";
    }else{
      echo "error occoured";
    }
  }
}
?>