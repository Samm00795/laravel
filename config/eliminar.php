<?php  

include '../config/database.php';
$db = new Database();
$con = $db->conectar();
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	
	$sentencia = $con->prepare("DELETE FROM producto WHERE id = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: ../paginas/catalogo.php');
	}else{
		echo "Error";
	}

?>