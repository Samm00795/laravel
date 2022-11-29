

<!DOCTYPE html>
<html>
<head>
	<title>MAQUETACION WEB</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="../css/estilonos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">
</head>
<body id="contenido2">
<header>
   <section>
   <div id="navegar1" class="card mb-3" style="max-width: 1100px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img id="logo" src="../img/logo1.png"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">       
        <h1 id="nombre" class="card-text"> Ferreteria  pernomania</h1>       
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
    <a class="navbar-brand" href="../index2.php">INICIO</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo2.php">CATALOGO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="login.php">LOGIN</a>
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

<!--cartillas para el contenido de nosotros-->
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../img/gif/04.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row g-0">

    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
      
    </div>
    <div class="col-md-4">
      <img src="../img/gif/04.gif" class="img-fluid rounded-start" alt="...">
    </div>
  </div>
</div>



<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(124, 153, 149);">
    © 2020 Copyright:
    <a class="text-dark" href="#">Ruben Chaupis</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>