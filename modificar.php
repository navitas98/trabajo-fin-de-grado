html>
<head>
<link href="css/modificados.css" rel="stylesheet" type="text/css">
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
		
			print"<center>
					<table id='dato'>
						<tr>
							<td><h2 id='datologin'>LOGIN</H2></td>php
							<td><input type='text' id='login' name='login' placeholder='".$filas["login"]."'></td>
						</tr>
						<tr>
							<td><h2>PASS</h2></td>
							<td><input type='password' id='contrasena' name='contrasena' placeholder=''></td>

						</tr>
						<tr>
							<td><h2>NOMBRE</h2></td>
							<td><input type='text' id='nombre' name='nombre' placeholder='".$filas["nombre"]."'></td>
						</tr>
						<tr>
							<td><h2>CORREO</h2></td>
							<td><input type='text' id='correo' name='correo' placeholder='".$filas["correo"]."'></td>
						</tr>
						<tr>
							<td><h2>DIRECCION</h2></td>
							<td><input type='text' id='direccion' name='direccion' placeholder='".$filas["direccion"]."'></td>
						</tr>
					</table>
					</center>
					<div 'foto'>
					<a href='datosmodificados.php?id=".$filas["id"]."&login=".$filas["login"]."&nombre=".$filas["nombre"]."&correo=".$filas["correo"]."&direccion=".$filas["direccion"]."'><img src='imagenes/usuarios/disco.png'></a>

					</div>
					";

		}
	}
		print"</section>";

 
	}else{

		header("Location: inicio.php");
	}
?>

</body>
</html>