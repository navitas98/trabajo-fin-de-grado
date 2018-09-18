<head>
<link href="css/ultimas.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jscript/recienllegadas.js"></script>
</head>
<body>
<?php
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		?>

		//enlaces del inicio

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
				
				<img id="logo_inicial" src="imagenes/inicio/eje.jpg">
				<!--<h3>MAQUINAS RECREATIVAS</h3>-->
			</center>
		</div>
	</center>	
</nav>		
				
<section>
	<center>
	<?php
			 $contador=0;
			$conexion = mysqli_connect("localhost", "root", "","basedatos") or die ("No se puede conectar con el servidor");
			$consulta1= mysqli_query($conexion,"SELECT * FROM `almacen` ORDER by id DESC limit 9 ") or die ("Fallo en la consulta");
			
			$nfilas1=mysqli_num_rows($consulta1);
			
			if ($nfilas1>0){
				print"<table><tr>";
				for($i=0;$i<$nfilas1;$i++)
		{
			$filas1=mysqli_fetch_array($consulta1);

			print"<td><a href='comprar.php?saludo=".$filas1["foto"]."'><img id='fotos' src='".$filas1["foto"]."'/></a></td>";
			$contador=$contador+1;
			
			if ($contador==3) {
				print"</tr><tr>";
				$contador=$contador-3;
			}
			
		}
			
			}



			 ?>
</center>
</section>
<aside>

</aside>
<footer>
	<center>
		<h5 id="pie">Trabajo realizado por Javier Navas</h5>
	</center>
</footer>




<?php 
	}else{

		header("Location: inicio.php");
	}
?>


</body>
</html>