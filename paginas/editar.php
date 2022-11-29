<?php 

//validacion de sesion
session_start();

if(!isset($_SESSION['rol'])){
   header('location: ../index2.php');
}else{
  if($_SESSION['rol']!= 1){
    header('location: ../index2.php');
  }
}
//fin de la validacion
// $con = new pdo('mysql:localhost;dbname=ferreteria','root','');
include '../config/database.php';
$db = new Database();
$con = $db->conectar();

if (!isset($_GET['id'])) {
  header('Location: index.php');
}

  $id = $_GET['id'];

  $sentencia = $con->prepare("SELECT * FROM producto WHERE id = ?;");
  $sentencia->execute([$id]);
  $persona = $sentencia->fetch(PDO::FETCH_OBJ);
  //print_r($persona);

    ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">
    <title>Editar producto</title>
    <link rel="stylesheet" href="../css/estiloeditar01.css">
  </head>
  <body id="cuerpologin">

  <div class="login-box">
  <h3>Editar producto:</h3>
  
		<form method="POST" action="../config/editarproceso.php">
			<table>

				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txt2nombre" value="<?php echo $persona->nombre; ?>"></td>
				</tr>
				<tr>
					<td>descripcion: </td>
					<td><input type="text" name="txt2descripcion" value="<?php echo $persona->descripcion; ?>"></td>
				</tr>
				<tr>
					<td>Precio: </td>
					<td><input type="numbre" name="txt2precio" value="<?php echo $persona->precio; ?>"></td>
				</tr>
        <tr>
					<td>Stock: </td>
					<td><input type="text" name="txt2stock" value="<?php echo $persona->stock; ?>"></td>
				</tr>
        
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona->id; ?>">
					<td colspan="2"><input class="btn btn-outline-success" type="submit" value="EDITAR PRODUCTO">
                      <a id="salir" href="catalogo.php">Salir</a>
        </td>
          
				</tr>
			</table>
		</form>
		</div>
  </body>
</html>