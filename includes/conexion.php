<?php
//require('./vendor/autoload.php');

//$envfile = "./.env";

//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, $envfile);
//$dotenv->load();

$usuario = "id19153755_caos720";
$password = "Caos720pass0///0";
$servidor = "localhost";
$basededatos = "id19153755_calendario720";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Ha ocurrido un error al conectar a la base de datos");
?>

