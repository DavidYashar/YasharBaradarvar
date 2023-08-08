<?php



class Furniture extends Product{
    protected $height;
    protected $width;
    protected $length;
  
    public function setHeight($height){
        $this->height = $height;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function setlength($length){
        $this->length = $length;
    }


    public function getHeight(){
        return $this->height;
    }
    public function getWidth(){
        return $this->width;
    }
    public function getLength(){
        return $this->length;
    }


    public function insertData(){
        $conn = mysqli_connect('localhost', 'root', '', 'moving');


        $sku = $_POST['SKU'];
    

        $check = mysqli_query( $conn, "SELECT * FROM ".$this->table. " WHERE `sku` = '$sku'");
        $valid = mysqli_num_rows($check);
     
        if($valid ==1){
   
         echo " duplicated sku, use another SKU";

        }else if(empty($_POST['height']) || empty($_POST['length']) || empty($_POST['width'])){

            echo "Please enter the all the data for furniture";
           

          }else{

            // htmlspecialchars($_POST['length'], ENT_QUOTES, 'UTF-8')
        $this->setSKU(htmlspecialchars($_POST['SKU'], ENT_QUOTES, 'UTF-8'));
        $this->setName(htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'));
        $this->setPrice(htmlspecialchars($_POST['price'], ENT_QUOTES, 'UTF-8'));
        $this->setHeight(htmlspecialchars($_POST['height'], ENT_QUOTES, 'UTF-8'));
        $this->setWidth(htmlspecialchars($_POST['width'], ENT_QUOTES, 'UTF-8'));
        $this->setLength(htmlspecialchars($_POST['length'], ENT_QUOTES, 'UTF-8'));
        $this->setType($_POST['type']);

   
        $stat = $conn->prepare("INSERT INTO ".$this->table."(SKU, name, price, type, width, height, length) VALUES(?,?,?,?, ?,?,?)");
        $stat->bind_param("ssdsiii", $this->SKU, $this->name, $this->price ,$this->type, $this->height, $this->length, $this->width);

        $result = $stat->execute();

        if($result){

            http_response_code(201); // Created
            echo  "Furniture property created successfully.";
        } else if (http_response_code(400)){
            // http_response_code(400); // Bad Request
            echo "Invalid product type.";
            
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
            echo "Furniture deleted successfully";
         }   else{
            echo "there is an error";
         }
    
    }
   

}


?>