<?php 

include '../config/database.php';
$db = new Database();
$con = $db->conectar();

	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	$id2 = $_POST['id2'];
	$nombre2 = $_POST['txt2nombre'];
	$descripcion2 = $_POST['txt2descripcion'];
	$precio2 = $_POST['txt2precio'];
	$stock2 = $_POST['txt2stock'];
	

	$sentencia = $con->prepare("UPDATE producto SET nombre = ?, descripcion = ?, precio = ?, 
												stock = ? WHERE id = ?;");
	$resultado = $sentencia->execute([$nombre2,$descripcion2,$precio2,$stock2, $id2]);

	if ($resultado === TRUE) {
		header('Location: ../paginas/catalogo.php');
	}else{
		echo "Error";
	}
?>