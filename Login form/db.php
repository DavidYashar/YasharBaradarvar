<?php

define("SERVER", 'localhost');
define("USERNAME", 'root');
define("PASSWORD", '');
define("DATABASE", "test1");

$conn = mysqli_connect(SERVER, USERNAME, PASSWORD,DATABASE);

if(!$conn){
    echo "connection failed";
}else{
    header("successfully connected");
}
?>
