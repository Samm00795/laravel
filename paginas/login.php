
<?php

include '../config/database.php';


$db = new Database();
$con = $db->conectar();


session_start();

if(isset($_SESSION['rol'])){
  switch($_SESSION['rol']){

    case 1;

    header('location: index.php');

    break;

    case 2;

    header('location: ../index2.php');

    break;

    default:
    
  }
}
if(isset($_POST['username']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = $con->prepare('SELECT*from usuario where  username = :username and password = :password');
  $sql->execute(['username'=>$username, 'password'=>$password]);

  $row = $sql->fetch(PDO::FETCH_NUM);
    if($row == true){
      //validar rol
      $rol = $row[4];
      $_SESSION['rol'] = $rol;

      switch($_SESSION['rol']){

        case 1;
    
        header('location: index.php');
    
        break;
    
        case 2;
    
        header('location: ../index2.php');
    
        break;
    
        default:
        
      }
    }else {

      echo"el usuario no existe";
    }

}


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="../css/estilos1.css">
  </head>
  <body id="cuerpologin">

    <div class="login-box">
      <img src="../img/logo1.png" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      <form action="#" method="POST">
        <!-- USERNAME INPUT -->
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="username">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password">
        <input type="submit" value="Log In">
        <a href="#">Registrarse</a><br>
        <a href="../index2.php">Salir</a>
      </form>
    </div>
  </body>
</html>


