<?php
// require_once 'Product.php';
class DVD extends Product{

   
    protected $size;
    
 

    public function setSize($size){
        $this->size = $size;
    }
    public function getSize(){
        return $this->size;
    }

    public function insertData(){
$conn = mysqli_connect('localhost', 'root', '', 'moving');

    
     $sku = $_POST['SKU'];
    

     $check = mysqli_query( $conn, "SELECT * FROM ".$this->table. " WHERE `sku` = '$sku'");
     $valid = mysqli_num_rows($check);
  
     if($valid ==1){

      echo " duplicated sku, use another SKU";
       }else if(empty($_POST['size'])){

        echo "Please enter the size of DVD";
       }else{

        
        $this->setSKU(htmlspecialchars($_POST['SKU'], ENT_QUOTES, 'UTF-8'));
        $this->setName(htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'));
        $this->setPrice(htmlspecialchars($_POST['price'], ENT_QUOTES, 'UTF-8'));
        $this->setSize(htmlspecialchars($_POST['size'], ENT_QUOTES, 'UTF-8'));
        $this->setType((string) $_POST['type']);
        
   
        $stat = $conn->prepare("INSERT INTO ".$this->table."(`SKU`, `name`, `price`,`type`,  `size`) VALUES(?,?,?,?, ?)");
        $stat->bind_param("ssdsi", $this->SKU, $this->name, $this->price, $this->type ,$this->size);
        $result=  $stat->execute();
    

        if($result){

        http_response_code(201); // Created
        echo  "DVD property created successfully.";
    } else if (http_response_code(400)){
        // http_response_code(400); // Bad Request
        echo  "Invalid product type.";
        
    } else {
    http_response_code(405); // Method Not Allowed
    echo  "Method not allowed for this endpoint.";
    }
    $stat->close();
    }

    }

    
    public function deleteData($SKUs){
        $conn = mysqli_connect('localhost', 'root', '', 'moving');
          
         foreach($SKUs as $sku) {
            $del = $sku->sku;
            $type = $sku->type;
          $result=  mysqli_query($conn,"DELETE FROM `product1` WHERE `sku` = '$del' AND `type`='$type'");

         }    if($result){
            echo "DVD deleted successfully";
         }   else{
            echo "there is an error";
         }
    
    }
   

}

?>