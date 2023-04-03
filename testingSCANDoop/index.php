<?php
include_once 'include/autoloader.inc.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="CSS/css.display1.css">
    <title>Document</title>
</head>
<body>


    <main>
    <?php
    $con = new Connect;
   $connection= $con->connect();
    $product = new Delete;
    // $query = mysqli_query($connection,"SELECT * FROM `product1`" );
    
     
     if (isset($_POST["deleteALL"])) {

       
         $product->delete();
        
    }
   
    ?>
    <!-- <a href="insert.php"><button class="add">add</a></button> -->
    <!-- <div class ="product_show"> -->
    
    <form   method="POST" action="">
    <section>
        <h2 class="header">Product List</h2>
        <div class="buttons">
    <a href="insert.php"><button class="add">ADD</a></button>
    <input id="delete-product-btn" class="Submit" type="submit" name="deleteALL" value="MASS DELETE">
    </div>
    </section>
     <!-- <a href="insert.php"><button class="add">add</a></button> -->
 <?php   
 $query = mysqli_query($connection,"SELECT * FROM `product1`" );
    while($value = mysqli_fetch_array($query)){

?>

    <div class ="product_show">
    <!-- <div> -->
       <input class="delete-checkbox" type="checkbox" name="delete_id[]" value="<?php echo htmlentities( $value["sku"]) ?>" >
       
     
      

      <p id="sku"> <?php echo $value['sku'] ?></p><br>
       <p id="name"> <?php echo $value['name'] ?></p><br>
       <p id="price"><?php echo $value['price'] ?> $</p><br>

       
<?php
 if(!empty($value['weight'])){

 
?>
     
       <p id="weight"> <?php echo "Weight: ", $value['weight'], " KG" ?></p>

       <?php
}
       ?>

<?php
   if(!empty($value['size'] )){

  
?>
       
       <p id="size"> <?php echo "Size: ", $value['size'], " MB" ?></p>

   <?php
    }
   ?>
      <?php 
       if(!empty($value['width']) || !empty($value['length'])  || !empty( $value['height'])){

       
       ?>
       
       <p id="dimention"> <?php echo "Dimentions: ", $value['width'], 
       " X ", $value['length'], " X ",$value['height'] ?></p>
     
<?php
}
?>
      
  
  </div>
    <?php
}
    ?>
   
    </form>
   
    <?php
    
mysqli_close($connection);
    ?>
    
    </main>
   
</body>
</html>





    