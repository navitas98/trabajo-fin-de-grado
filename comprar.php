<html lang="es">
<head>
<link href="css/comprar.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		

	
?>

<header>
			<div id="cabecera">
			<?php 
				print" 
				<table id='logos'>
							<tr>
								<td><a href='inicio.php'><img id='comecocos' src='imagenes/inicio/comecocos.gif'></a></td>
								<td><a href='ultimas.php'><h2 >Recien llegadas</h2></a></td>
								<td><a href='categorias.php'><h2>Categorias</h2></a></td>
								<td><a href='buscador.php'><h2>Buscador</h2></a></td>
								<td><a href='carrito.php'><h2>Carrito</h2></a></td>
								<td><a href='user.php'><h2>".$_SESSION['u_usuario']."</h2></a></td>
							</tr>
				</table>";
			?>
			</div>
</header>
		


<nav>
	<center>

		<div id="titulo">
			<center>
				
				<!-<img id="logo_inicial" src="imagenes/inicio/eje.jpg">-->
				<!--<h3>MAQUINAS RECREATIVAS</h3>-->
			</center>
		</div>
	</center>	
</nav>		
				
<section>
	
	<?php $foto=$_GET["saludo"];
	print"<img id='foto' src=".$foto.">";
  ?>

</section>
<aside>
	<?php 
$conexion = mysqli_connect("localhost", "root", "","basedatos") or die ("No se puede conectar con el servidor");
$consulta=mysqli_query($conexion,"SELECT * FROM almacen WHERE foto='".$foto."'") or die ("consulta erronea");
$nfilas=mysqli_num_rows($consulta);
echo "<table>";
if ($nfilas>0)
	{
			$filas=mysqli_fetch_array($consulta);	
		echo"<tr><td><center><h1 id='nombre'>MAQUINA DE  ".$filas["nombre"]."</h1></center></td></tr>";
		echo"<tr><td><h1 id='descripcion' lang='es'>".$filas["descripcion"]."</h1></td></tr>";
		echo "<tr><td><h1 id='stock'> Numero de unidades ".$filas["stock"]."</h1></td><td><h1 id='precio'>Precio de cada maquina ".$filas["precio"]."</h1></td><tr>";
		echo "<tr><td>
			<button type='submit' id='boton' value='Submit' name='Submit'><a href='comprado.php?nombre=".$filas["nombre"]."&descripcion=".$filas["descripcion"]."&precio=".$filas["precio"]."&stock=".$filas["stock"]."&foto=".$foto."&usuario=".$_SESSION['u_usuario']."'><img id='comprar' src='imagenes/compra/boton.png' ></a></button></td></tr></table>	";

		;

	}


	 ?>
	
<a href=""></a>
</aside>
<footer>
	<center>
		<h5 id="pie">Trabajo realizado por Javier Navas</h5>
	</center>
</footer>




<?php 

	}else{

		header("Location: login.php");
	}
?>


</body>
</html>