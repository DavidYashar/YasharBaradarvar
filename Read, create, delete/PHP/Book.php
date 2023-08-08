<?php

class Book extends Product{
    protected $weight;
  


    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function insertData(){
        $conn = mysqli_connect('localhost', 'root', '', 'moving');


        $sku = $_POST['SKU'];
    

        $check = mysqli_query( $conn, "SELECT * FROM ".$this->table. " WHERE `sku` = '$sku'");
        $valid = mysqli_num_rows($check);
     
        if($valid ==1){
   
         echo " duplicated sku, use another SKU";
          }else if(empty($_POST['weight'])){

            echo "Please enter the weight of the Book";
           }else{
            
        $this->setSKU(htmlspecialchars($_POST['SKU'], ENT_QUOTES, 'UTF-8'));
        $this->setName(htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'));
        $this->setPrice(htmlspecialchars($_POST['price'], ENT_QUOTES, 'UTF-8'));
        $this->setWeight(htmlspecialchars($_POST['weight'], ENT_QUOTES, 'UTF-8'));
        $this->setType($_POST['type']);
   
        $stat = $conn->prepare("INSERT INTO ".$this->table."(sku, name, price, type, weight) VALUES(?,?,?,?, ?)");
        $stat->bind_param("ssdsi", $this->SKU, $this->name, $this->price ,$this->type, $this->weight);

       $result = $stat->execute();

       if($result){

        http_response_code(201); // Created
        echo  "Book property created successfully.";
    } else if (http_response_code(400)){
       
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
   echo "Book deleted successfully";
}   else{
   echo "there is an error";
}

}


}




?>