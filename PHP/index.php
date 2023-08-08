<?php

header('Access-Control-Allow-Origin: http://localhost:8000');
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');


$conn = mysqli_connect('localhost', 'root', '', 'moving');
$query = mysqli_query($conn,"SELECT * FROM `product1`" );


while($row = $query->fetch_assoc()){
    $users[] = $row;
  }


 if (!empty($users)) {
  Header('Content-Type', 'application/json');
    echo json_encode($users);
    // var_dump($users);
  } else {
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Error retrieving data'));
  }
  $conn->close();
?>
