<?php
$conn = mysqli_connect('localhost', 'root');
mysqli_select_db($conn, 'test');

$query = "SELECT *FROM `commerce` WHERE `featured`=1";
$featured = $conn->query($query);
?>

<div class="col-md-8"></div>
    
       <div id='product' class="col-md-3">
        <div class="row">
         
         <?php 
          while($product = mysqli_fetch_assoc($featured)):
         ?>
         <div color="color-md-5">
            <h4><?= $product['title']; ?></h4>
            <img src="images/phone1.jpg" alt="<?= $product['title']; ?>"/>
            <p class="lclass">$ <?= $product['price']; ?></p>
            <p class="desc"> description: <?= $product['description']; ?></p>
            <p class="bname">Brand name: <strong><?= $product['brand']; ?></strong></p>
         </div>
        <?php endwhile; ?>

       </div>
       </div>
