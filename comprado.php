<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$nombre=$_GET["nombre"];
$descripcion=$_GET["descripcion"];
$precio=$_GET["precio"];
$stock=$_GET["stock"];
$foto=$_GET["foto"];
$usuario=$_GET["usuario"];
$conexion = mysqli_connect("localhost", "root", "","basedatos") or die ("No se puede conectar con el servidor");
        $proceso=mysqli_query($conexion,"INSERT INTO `carrito` (`id`, `nombre`, `foto`, `descripcion`, `precio`, `stock`, `usuario`) VALUES (NULL, '".$nombre."', '".$foto."', '".$descripcion."', '".$precio."', '".$stock."', '".$usuario."');");
        header('Location: inicio.php');
 ?>
 
</body>
</html>