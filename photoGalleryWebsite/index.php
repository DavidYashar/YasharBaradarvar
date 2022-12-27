<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>photo Gallery</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>


    </ul>
    
  </div>
</nav>
<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/architecture1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>Architecture</h5>
    <p>...</p>
  </div>
    </div>
   
    <div class="carousel-item">
      <img src="images/travel1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>Travel</h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="images/nature1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>nature</h5>
    <p>...</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-4">
   <div class="py-4">
    <h2 id="nature" class="text-center">Nature</h2>
   </div>
   <div class="container-fluid">
    <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/nature1.jpg" class='img-fluid pb-3'>
   </div>

   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/nature2.jpg" class='img-fluid pb-3'>
   </div>

   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/nature3.jpg" class='img-fluid pb-3'>
   </div>
   </div>
   </div>
</section>

<section class="my-4">
   <div class="py-4">
    <h2 id="architecture" class="text-center">architecture</h2>
   </div>
   <div class="container-fluid">
    <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/architecture2.jpg" class='img-fluid pb-3'>
   </div>

   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/architecture3.jpg" class='img-fluid pb-3'>
   </div>

   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/architecture4.jpg" class='img-fluid pb-3'>
   </div>
   </div>
   </div>
</section>

<section class="my-4">
   <div class="py-4">
    <h2 id="travel" class="text-center">travel</h2>
   </div>
   <div class="container-fluid">
    <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/travel1.jpg" class='img-fluid pb-3'>
   </div>

   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/travel2.jpg" class='img-fluid pb-3'>
   </div>

   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/travel3.jpg" class='img-fluid pb-3'>
   </div>
   </div>
   </div>
</section>


<!-- contact section -->
<section class="my-4">
<div class="py-4">
    <h2 id="contact" class="text-center">Contact US</h2>
   </div>

   <div class="w-50 m-auto">
       <form action="about.php" method="POST">
         <div class="form-group">
          <label>Name:</label>
          <input name="name" type="text" class="form-control">
         </div>

         <div class="form-group">
          <label>Email:</label>
          <input name="email" type="email" class="form-control">
         </div>

         <div class="form-group">
          <label>number:</label>
          <input name="phone" type="number" class="form-control">
         </div>

         <input type="submit" name="submit" value="submit" class="btn btn-success">
       </form>
   </div>

</section>

<!-- about -->
<section class="my-4">
<div class="py-4">
    <h2 id="about" class="text-center">about US</h2>
   </div>
   <div class="container-fluid">
     <h3 class="text-center">Yashar</h3><br>
     <p class="text-center"> This is <strong>Yashar</strong>. I am a <i> junior web developer</i>. I also have passion for photography.</p><br>
     <p class="text-center"> Its not profession though, just for fun.</p>
   </div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
