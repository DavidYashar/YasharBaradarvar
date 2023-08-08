<?php


require ('autoLoader.php');
header('Access-Control-Allow-Origin: http://localhost:3000');

$conn = mysqli_connect('localhost', 'root', '', 'moving');

$productClasses = [
  'book' => Book::class,
  'DVD' => DVD::class,
  'Furniture' => Furniture::class,
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$productName = $_POST['type'];

if (array_key_exists($productName, $productClasses)) {
  $productClass = $productClasses[$productName];
  $product = new $productClass();

  // Insert data using the determined product object
  $product->insertData();



}
}


?>


      
    
    

   