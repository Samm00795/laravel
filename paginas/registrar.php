
   <?php 

  // $con = new pdo('mysql:localhost;dbname=ferreteria','root','');
  include '../config/database.php';

  
  $db = new Database();
  $con = $db->conectar();

    if(isset($_GET['nombre'])){

        $nombre = $_GET['nombre'];
        $descripcion = $_GET['descripcion'];
        $precio = $_GET['precio'];
        $stock = $_GET['stock'];

        $insertar = $con->prepare("INSERT INTO producto(id,nombre,descripcion,precio,stock) values(null, '$nombre','$descripcion',$precio,$stock) ");
        $insertar->execute();

        header('location: catalogo.php');
    }
        ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>registro producto</title>
    <link rel="stylesheet" href="../css/estilos10.css">
  </head>
  <body id="cuerpologin">

    <div class="login-box" background-image="../img/gif/13.gif");>
      <img src="../img/logo1.png" class="avatar" alt="Avatar Image">
      <h1>REGISTRA PRODUCTOS</h1>

      <form method="GET">
        <!-- USERNAME INPUT -->
        <label for="">NOMBRE</label>
        <input type="text"  name="nombre">
        <label for="">DESCRIPCION</label>
        <input type="text" name="descripcion">
        <!-- PASSWORD INPUT -->
        <label for="">PRECIO</label>
        <input type="number" name="precio">
        <label for="">Stock</label>
        <input type="number" name="stock" >
        <button type="submit">Registrar</button>
        
        <a href="catalogo.php">Salir</a>
      </form>
    </div>

  </body>
</html>