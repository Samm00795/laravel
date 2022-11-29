
<?php


// validacion de loa sesion
session_start();

if(!isset($_SESSION['rol'])){
   header('location: ../index2.php');
}else{
  if($_SESSION['rol']!= 1){
    header('location: ../index2.php');
  }
}

//fin de la validacion

include '../config/database.php';
include '../config/config.php';

$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, descripcion, precio,marca from producto where stock >= 1 ");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

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
<script type="text/javascript">

  function confirmdelete(){
    var respuesta = confirm("estas seguro de eliminar tu producto");
    if(respuesta == true)
    {
      return true;
    }else{
      return false;
    }
  }

  </script>

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
        <h1 id="nombre" class="card-text"> Ferreteria    pernomania  'Catalogo'</h1>       
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
        <a href="registrar.php"
         class="btn btn-primary">Insertar Producto</a>

                <li class="nav-item">
          <a class="nav-link  active" href="../config/cerrarsesion.php">CERRAR SESION</a>
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



<main id="cartinformation">
  <div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<?php  foreach($resultado as $row) { ?>
  <div class="col text-center">
    <div class="card shadow-sm">

        <?php 
        
        $id = $row['id'];
        $imagen = "../img/producto/". $id ."/i1.png";

        if(!file_exists($imagen)){
          $imagen = "../img/1.png";
        }
        ?>



      <img id="plogo" src="<?php echo $imagen; ?>" class="d-block w-100" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?php echo $row['id'];?></h5>
        <h5 class="card-title"><?php echo $row['nombre'];?></h5>
        <p class="card-text"><?php echo $row['descripcion'];?></p>  
        <h5 class="card-title"><?php echo"$ " .$row['precio'];?></h5>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
         <a href="detalle.php?id=<?php echo $row['id'];?>&token=<?php echo hash_hmac('sha1',$row['id'], KEY_TOKEN);?>"
         class="btn btn-primary">Detalle</a>
      </div>  
      <a id="precio" href="editar.php?id=<?php echo $row['id'];?>" class="btn btn-primary">editar</a>

      <a id="eliminar" href="../config/eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" onclick="return confirmdelete() ">eliminar</a>
    </div>
      </div>
      </div>
</div>
    <?php } ?>
  </div>
</div>
</main>


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