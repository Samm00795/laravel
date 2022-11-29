<?php

include '../config/database.php';
include '../config/config.php';

$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id'])? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){
    echo 'error al mostrar datos';
    exit;

}else{

    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);


if ($token == $token_tmp) {
    
    $sql = $con->prepare("SELECT count(id)  from producto where id=? and stock <= 1 ");
    $sql->execute([$id]);
    if($sql->fetchColumn() > 0){

        $sql = $con->prepare("SELECT  nombre, descripcion, precio from producto where id=? and  stock <= 1  limit 1");
        $sql->execute([$id]);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
        $precio = $row['precio'];

      $dir_images='../img/producto/'. $id . '/';
      $rutaimg = $dir_images . '1.png';

        if(!file_exists($rutaimg)){
            $rutaimg ='../img/noimag.jpg';
        }
        $imagenes = array();
        $dir = dir($dir_images);

        while (($archivo= $dir->read()) != false){
            if($archivo != '1.png' && (strpos($archivo,'jpg') || strpos($archivo,'jpeg'))){
                $imagenes[]= $dir_images . $archivo;
            }
        }

        $dir->close();

    }

} else {
    echo'error al mostrar datos';
    exit;
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
        <h1 id="nombre" class="card-text"> Ferreteria   pernomania 'detalles'</h1>       
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


<main>

<div class="container">

        <div class="row">
            <div class="col-md-6 order-md-1">
<!--carrusel de imagen del detalle-->
<div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <img src="<?php echo $rutaimg; ?>" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
            <div class="col-md-6 order-md-2">
            <h2><?php echo $nombre; ?> </h2>
                <h2><?php echo MONEDA . $precio; ?> </h2>

                <p class="lead"><?php echo $descripcion; ?> </p>
                
            </div>
        </div>

    </div>


</main>





<!--cartilla de productos
<footer class="bg-light text-center text-lg-start">
  
  <div class="text-center p-3" style="background-color: rgba(124, 153, 149);">
    © 2020 Copyright:
    <a class="text-dark" href="#">Ruben Chaupis</a>
  </div>
  
</footer>
 Copyright -->
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>