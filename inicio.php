<html lang="en">
<head>
<link href="css/inici.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jscript/inicio.js"></script>
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
								<td><a href='usuario.php'><h2>".$_SESSION['u_usuario']."</h2></a></td>
							</tr>
				</table>";
			?>
			</div>
</header>
		


<nav>
	<center>

		<div id="titulo">
			<center>
				
				<img id="logo_inicial" src="imagenes/inicio/eje.jpg">
				<!--<h3>MAQUINAS RECREATIVAS</h3>-->
			</center>
		</div>
	</center>	
</nav>		
				
<section>
	
	<a href="ultimas.php">
	<div id="fotos">

			<div id="recien">
				<center>
					<h4>RECIEN LLEGADAS</h4><h5>COMPRAR AHORA</h5>
				</center>
			</div>	
			
			<div id="llegadas">
				<img id="pacman" src="imagenes/inicio/pacman.gif">
			</div>
	</div>	
	</a>

</section>
<aside>
	<form action="categorias" method="POST">
	<center>
	<div id="tipos">
		<table>
			<tr>
				
				<td><a href="categorias.php?categorias=heroe"><img id="heroe" value="heroe" src="imagenes/inicio/heroes.jpg"></a></td>
				<td><a href="categorias.php?categorias=clasico"><img id="clasico" src="imagenes/inicio/clasicos.jpg"></a></td>
				<td><a href="categorias.php?categorias=lucha"><img id="lucha" src="imagenes/inicio/carreras.jpg"></a></td>
				
			</tr>
		</table>
	</div>
	</form>
	</center>
	

		
	
	</center>

</aside>
<footer>
	<center>
		<h5 id="pie">Trabajo realizado por Javier Navas</h5>
	</center>
</footer>




<?php 

	}else{
		?>

<header>
			<div id="cabecera">
			<?php 
				print" 
				<table id='logo'>
							<tr>
								<td><a href='login.php'><img id='comecocos' src='imagenes/inicio/comecocos.gif'></a></td>
								<td><a href='login.php'><h2 >Recien llegadas</h2></a></td>
								<td><a href='login.php'><h2>Categorias</h2></a></td>
								<td><a href='login.php'><h2>Buscador</h2></a></td>
								<td><a href='login.php'><h2>Carrito</h2></a></td>
								<td><a href='login.php'><h2>Login/registro</h2></a></td>
							</tr>
				</table>";
			?>
			</div>
</header>
		


<nav>
	<center>

		<div id="titulo">
			<center>
				
				<img id="logo_inicial" src="imagenes/inicio/eje.jpg">
				<!--<h3>MAQUINAS RECREATIVAS</h3>-->
			</center>
		</div>
	</center>	
</nav>		
				
<section>
	
	<a href="login.php">
	<div id="fotos">

			<div id="recien">
				<center>
					<h4>RECIEN LLEGADAS</h4><h5>COMPRAR AHORA</h5>
				</center>
			</div>	
			
			<div id="llegadas">
				<img id="pacman" src="imagenes/inicio/pacman.gif">
			</div>
	</div>	
	</a>

</section>
<aside>
	<form action="categorias" method="POST">
	<center>
	<div id="tipos">
		<table>
			<tr>
				
				<td><a href="login.php"><img id="heroe" value="heroe" src="imagenes/inicio/heroes.jpg"></a></td>
				<td><a href="login.php"><img id="clasico" src="imagenes/inicio/clasicos.jpg"></a></td>
				<td><a href="login.php"><img id="lucha" src="imagenes/inicio/carreras.jpg"></a></td>
				
			</tr>
		</table>
	</div>
	</form>
	</center>
	

		
	
	</center>

</aside>
<footer>
	<center>
		<h5 id="pie">Trabajo realizado por Javier Navas</h5>
	</center>
</footer>
		
	<?php }
?>


</body>
</html>