<?php

// include "connect.class.php";
include_once 'include/autoloader.inc.php';

$submit = new Connect();
$submit->submit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="CSS/css.insert.css">
    <title>Document</title>
</head>
<body>

<form id="product_form" method="POST" action="insert.php">

<section class="head">
    <h2 class="header">ADD PRODUCT</h2>
    <div class="buttons">
<input class ="save" id="save" name="submit" type="submit" value="save">
<button class="cancel"><a href="index.php">Cancel</button></a>
        </div>
        </section>
<div class="main-items">

     <label class="label" for="sku">SKU</label>
     <input id="sku" type="text" name="sku" required oninvalid="this.setCustomValidity('')"
       oninput="setCustomValidity('')"><br><br> 
     <label class="label1" for="name">Name</label>
     <input id="name" type="text" name="name" required oninvalid="this.setCustomValidity('')"
       oninput="setCustomValidity('')"><br><br>
     <label class="label2" for="price">Price($)</label>
     <input id="price" type="number" name="price" required oninvalid="this.setCustomValidity('')"
       oninput="setCustomValidity('')"><br>
     </div>

        <div class="select">
     <label>Type Switcher</label>
     <select id="productType" name="type" value="type">
        <option id="">TypeSwitcher</option>
        <option name="Furniture" value="Furniture"  id="Furniture">Furniture</option>
        <option name="Book" value="Book" id="Book">Book</option>
        <option name="DVD" value="DVD" id="DVD">DVD</option>
     </select><br>
     </div>



    <section class="typeSwitcher">
    <!-- switch forms for DVD -->
    <div class="form" id="form-DVD"  name="DVD" style="display:none">
        <h3>DVD</h3>
      <label for="DVDsize">SIZE(MB)</label>
      <input id="size" type="number" name="size" required oninvalid="this.setCustomValidity('')"
       oninput="setCustomValidity('')"><br><br>
      <p>*Product description*</p>
      <p>Please provide size in Mega byte</p>
</div><br><br>


    <!-- switch forms for ferniture -->
   <div class="form" id="form-Furniture"  name="Furniture" style="display:none">
   <h3>Furniture</h3>
    <label for ="height">HEIGHT(CM)</label>
    <input id="height" name="height" type="number"  required oninvalid="this.setCustomValidity('')"
       oninput="setCustomValidity('')"><br><br>
    <label for="Fwidth">WIDTH(CM)</label>
    <input id="width" name="width" type="number" required oninvalid="this.setCustomValidity('')"
       oninput="setCustomValidity('')"> <br><br>
    <label for="length">LENGTH(CM)</label>
    <input id="length" name="length" type="number"   required oninvalid="this.setCustomValidity('')"
       oninput="setCustomValidity('')"><br><br>
    <p>*Product description*</p>
    <p>Please provide dimention in centimeter</p>
</div><br><br>


   <!-- switch forms for Book -->
   <div class="form" id="form-Book" name="Book"  style="display:none">
   <h3>BOOK</h3>
    <label>WEIGHT(KG)</label>
    <input id="weight" name="weight" type="number"  required oninvalid="this.setCustomValidity('')"
       oninput="setCustomValidity('')"><br><br>
    <p>*Product description*</p>
    <p>Please provide weight in kilo gram</p>

</div>
   </section>
   </form>


    <script src="scripts22.js"></script>

    
</body>
</html>

<?php

?>