
<?php

session_start();

if(!isset($_SESSION['rol'])){
   header('location: ../index2.php');
}else{
  if($_SESSION['rol']!= 1){
    header('location: ../index2.php');
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>MAQUETACION WEB</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="../css/stilo02.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">
</head>
<body id="contenido">
<header>
   <section>
   <div id="navegar1" class="card mb-3" style="max-width: 1100px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img id="logo" src="../img/logo1.png"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">       
        <h1 id="nombre" class="card-text"> Ferreteria    Pernomania</h1>       
      </div>
    </div>
  </div>
</div>
   </section> 
<!--navvar de navegacion entre paginas-->
<section id="navegar2">
<nav  class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">INICIO</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="catalogo.php">CATALOGO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active"  href="../config/cerrarsesion.php">CERRAR SESION</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
</section>
</header>
<!--inicio del carrusel-->
<section>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/banner2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/banner3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/banner4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<main id="cartinformation">

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="../img/i1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">$ 200</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../img/i2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">$ 200</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../img/i3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">$ 200</a>
      </div>
    </div>
  </div>
</div>
</main>


 
<footer class="bg-light text-center text-lg-start">
  
  <div class="text-center p-3" style="background-color: rgba(124, 153, 149);">
    © 2020 Copyright:
    <a class="text-dark" href="#">Ruben Chaupis</a>
  </div>
  
</footer>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>