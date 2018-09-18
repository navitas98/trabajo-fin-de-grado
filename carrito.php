<html>
<head>
<link href="css/carritos.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
	session_start();
	if (isset($_SESSION['u_usuario'])) {



		print" 
		<header>
			<div id='cabecera'>
				<table id='logo'>
							<tr>
								<td><a href='inicio.php'><img id='comecocos' src='imagenes/inicio/comecocos.gif'></a></td>
								<td><a href='ultimas.php'><h2 >Recien llegadas</h2></a></td>
								<td><a href='categorias.php'><h2>Categorias</h2></a></td>
								<td><a href='buscador.php'><h2>Buscador</h2></a></td>
								<td><a href='carrito.php'><h2>Carrito</h2></a></td>
								<td><a href='usuario.php'><h2>".$_SESSION['u_usuario']."</h2></a></td>
							</tr>
				</table>
			</div>	
		</header>
		";

		print"
					<nav>
						<center>

							<div id='titulo'>	
								<center>
				
									<img id='logo_inicial' src='imagenes/inicio/eje.jpg'>
							</div>
						</center>
					</nav>	
		";	
		$conexion = mysqli_connect("localhost", "root", "","basedatos") or die ("No se puede conectar con el servidor");
		$consulta= mysqli_query($conexion,"SELECT * FROM `carrito` WHERE `usuario`='".$_SESSION['u_usuario']."'") or die ("Fallo en la consulta");
		$nfilas=mysqli_num_rows($consulta);
		echo"<section>";
		if ($nfilas>0)
	{
		for($i=0;$i<$nfilas;$i++)
		{
			$filas=mysqli_fetch_array($consulta);
		
			print"
					
				<div>
					<center>
						<table id='nombre_foto'>
							<tr>
								<td>
									<h1 id='nombre'>".$filas["nombre"]."</h1>

								</td>
							</tr>
							<tr>
								<td>
									<img id='foto' src=".$filas["foto"].">
								<tr>
							</tr>
						</table>
						<table id='datos'>
							<tr>
								<td><h2>".$filas["descripcion"]."</td>

							</tr>
							<tr>
							<td><h2>Unidades ".$filas["stock"]."</h2></td>
							</tr>
							<tr>
							<td><h2>Precio ".$filas["precio"]."</h2></td>
							</tr>
							<tr>
							<td><a href='https://www.paypal.com/es/home'><img id='paypal' src='imagenes\carrito\paypal.png'></td></a>	
							</tr>
						</table>
					
					</center>
					";

		}
	}
		print"</section>";

 
	}else{

		header("Location: login.php");
	}
?>

</body>
</html>