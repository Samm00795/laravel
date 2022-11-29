<?php


class Database{

 private $hostname = "localhost";
 private $database = "ferreteria";
 private $username = "root";
 private $password = "";


function conectar()
{
    try{
    $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database;

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    $pdo = new PDO($conexion, $this->username,$this->password,$options);
    return $pdo;
        }
        catch(PDOException $e){
            echo 'Error al conectar:' . $e->getMessage();
            exit;
        }
} 
}