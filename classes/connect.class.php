<?php

include_once 'include/autoloader.inc.php';
class Connect {
    var $server = "localhost";
    var $user = "root";
    var $pass = '';
    var $db = "moving";
    var $tbName = 'product1';
    public $counter = 1;
    public function connect(){
        $con = mysqli_connect($this->server, $this->user, $this->pass, $this->db);

        return $con;
    }


    public function submit(){


      if(isset($_POST['submit'])){
       
      
        $sku = $_POST['sku'];
       
        $name= $_POST['name'];
        $price = $_POST['price'];
    
        $type = $_POST['type'];
      
        if(empty( $_POST['width'])){
          $w = null;
        }else{
          $w = $_POST['width'];
        }
        // $w = $_POST['width'];
    
        if(empty($_POST['length'])){
          $l = null;
        }else{
          $l = $_POST['length'];
        }
        // $l = $_POST['length'];
    
        if(empty($_POST['height'])){
          $h = null;
        }else{
          $h = $_POST['height'];
        }
        // $h = $_POST['height'];
      
        if(empty($_POST['weight'])){
          $W = null;
        }else{
          $W = $_POST['weight'];
        }
        // $W = $_POST['weight'];
      if(empty($_POST['size'])){
        $s = null;
      }else{
        $s = $_POST['size'];
      }
        // $s = $_POST['size'];
      
        if($type == "Furniture"){
          $object = new Connect;
          $object->setFur($sku, $name, $price,$type, $w, $l, $h);
        }else if ($type == "Book"){
          $object = new Connect;
          $object->setBook($sku, $name, $price, $type, $W);
        }else{
          $object = new Connect;
          $object->setDVD($sku, $name, $price, $type, $s);
        }
      }
      
    }




    public function setBook($sku,  $n, $p,$type, $W){
   $conn=$this->connect();
   $weight = isset($W) ? $W: null;

   $check = mysqli_query( $conn, "SELECT * FROM ".$this->tbName. " WHERE `sku` = '$sku'");
   $valid = mysqli_num_rows($check);

   if($valid ==1){

  echo " duplicated sku, use another SKU";
   }else{

  
   $stat = $conn->prepare("INSERT INTO ".$this->tbName."(sku, name, price, type, weight) VALUES(?, ?, ?, ?, ?)");
   $stat->bind_param("ssdsi", $sku, $n, $p, $type, $weight);

   $result = $stat->execute();
  //  $result =  mysqli_query($conn, "INSERT INTO ".$this->tbName."(sku, name, price, type, weight) VALUES('$sku', '$n','$p','$type', '$weight')");

  if($result){
        
    echo "successfully added";

  }else{
    echo "error";
  }
      // $stat->close();
      $conn->close();
    }
  }
  
    public function setDVD($sku, $n, $p,$type, $s){
      $conn=$this->connect();
     $size = isset($s) ? $s: null;

     $check = mysqli_query( $conn, "SELECT * FROM ".$this->tbName. " WHERE `sku` = '$sku'");
     $valid = mysqli_num_rows($check);
  
     if($valid ==1){

      echo " duplicated sku, use another SKU";
       }else{

     $stat = $conn->prepare( "INSERT INTO ".$this->tbName."(sku, name, price, type, size) VALUES(?,?,?,?, ?)");
     $stat->bind_param("ssdsi",$sku, $n, $p,$type, $size);

      $result = $stat->execute();
      // $result =  mysqli_query($conn, "INSERT INTO ".$this->tbName."(sku, name, price, type, size) VALUES('$sku','$n','$p','$type', '$size')");
   
      if($result){
        
        echo "successfully added";
    
      }else{
        echo "error";
      }
        
        //  $stat->close();
         $conn->close();
       }

      }
       public function setFur($sku, $n, $p,$type,  $w, $h, $l){
        $conn=$this->connect();

        $width = isset($w) ? $w : null;
        $height = isset($h) ? $h : null;
        $length = isset($l) ? $l : null;

        $check = mysqli_query( $conn, "SELECT * FROM ".$this->tbName. " WHERE `sku` = '$sku'");
        $valid = mysqli_num_rows($check);
     
        if($valid ==1){

          echo " duplicated sku, use another SKU";
           }else{

        $stat = $conn->prepare("INSERT INTO ".$this->tbName."(sku, name, price, type, width, height, length) VALUES(?,?,?,?, ?,?,?)");
        $stat->bind_param("ssdsiii", $sku, $n, $p,$type,  $width, $height, $length);

       $result = $stat->execute();
        // $result =  mysqli_query($conn, "INSERT INTO ".$this->tbName."(sku, name, price, type, width, height, length) VALUES('$sku','$n','$p','$type',  '$width', '$height', '$length')");
      
        if($result){
        
          echo "successfully added";
      
        }else{
          echo "error";
        }
          //  $stat->close();
           $conn->close();
         }

        }
       


         

      }
?>