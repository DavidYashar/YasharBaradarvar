<?php



require_once 'autoLoader.php';
header('Access-Control-Allow-Origin: http://localhost:8000');
header("Content-Type: application/json");

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Headers: Content-Type');


    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");
    header("Content-type:application/json");

$conn = mysqli_connect('localhost', 'root', '', 'moving');


$productClasses = [
    'book' => Book::class,
    'DVD' => DVD::class,
    'Furniture' => Furniture::class,
  ];

  $jsonData = file_get_contents('php://input');
  
  $skus = json_decode($jsonData);

  
  echo var_dump($skus);
foreach ($skus as $sku) {
    $productName = $sku->type;
    

  if (array_key_exists($productName, $productClasses)) {
    $productClass = $productClasses[$productName];
    $product = new $productClass();
  
 
    $product->deleteData([$sku]);


  }

}
?>