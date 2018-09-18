<html>
<head>
<link href="css/usuario.css" rel="stylesheet" type="text/css">
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
		$consulta= mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE `nombre`='".$_SESSION['u_usuario']."'") or die ("Fallo en la consulta");
		$nfilas=mysqli_num_rows($consulta);
		echo"<section>";
		if ($nfilas>0)
	{
		for($i=0;$i<$nfilas;$i++)
		{
			$filas=mysqli_fetch_array($consulta);
		
			print"
					<div id='foto_user'>
						<table id='usuario'>
						<tr><td><center><h1 id='login'>".$filas["login"]."</h1></center></td></tr>
						<tr><td><img id='fotouser' src=".$filas["foto"]."></td></tr>
						<tr><td><a href='modificar.php'><img id='nes' src='imagenes/usuarios/nes.png'></a></td></tr>	
						</table>
					</div>
					<div id='datos'>
						<table id='datos_personales'>
						<tr><td><center><h1 id='datospersonales'>DATOS</h1></center></td></tr>
						<tr><td><h2>Nombre</h2></td><td><center><h2>".$filas["nombre"]."</h2></center></td></tr>
						<tr><td><h2>Correo</h2></td><td><center><h2>".$filas["correo"]."</h2></center></td></tr>
						<tr><td><h2>Dirección</h2></td><td><center><h2>".$filas["direccion"]."</h2></center></td></tr>
						<tr><td><center> <a href='cerrar_sesion.php'><img id='perfil' src='imagenes/usuarios/gameover.png'></a></center></td></tr>
						</table>

					</div>
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