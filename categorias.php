<html lang="en">
<head>
<link href="css/categoria.css" rel="stylesheet" type="text/css">

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
	
		<table>
			<tr>
				
				<td><a href="categoria.php?categorias=heroe"><img id="heroe" value="heroe" src="imagenes/categorias/heroeslogo.png"></a></td>
				<td><a href="categoria.php?categorias=heroe"><h4 id="heroes">HEROES</h4></a></td>
				
				
			</tr>
		</table>
	</div>
	

<aside>
		<div >
		<table id="clasicos">
			<tr>
				
				
				<td><a href="categoria.php?categorias=clasico"><h4 id="clasic">CLASICOS</h4></a></td>
				<td><a href="categoria.php?categorias=clasico"><img id="clasico" value="heroe" src="imagenes/categorias/clasicoslogo.png"></a></td>
				
			</tr>
		</table>
	</div>


</aside>
<footer>
	<div >
		<table>
			<tr>
				
				<td><a href="categoria.php?categorias=carreras"><img id="heroe" value="heroe" src="imagenes/categorias/carreraslogo.png"></a></td>
				<td><a href="categoria.php?categorias=carreras"><h4 id="heroes">CARRERAS</h4></a></td>
				
				
			</tr>
		</table>
	</div>



</footer>




<?php 
	}else{

		header("Location: login.php");
	}
?>


</body>
</html>