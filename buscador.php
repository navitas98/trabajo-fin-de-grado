<head>
<link href="css/buscadore.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		print"<center>";
		?>



<FORM ACTION="buscador.php" METHOD="POST">
<?php

$conexion = mysqli_connect("localhost", "root", "","basedatos") or die ("No se puede conectar con el servidor");


if(isset($_POST['buscar'])){

$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$foto=$_POST['foto'];




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
	<?php
		
		$contador=0;
		$conexion = mysqli_connect("localhost", "root", "","basedatos") or die ("No se puede conectar con el servidor");
		$consulta=mysqli_query($conexion,"SELECT * FROM `almacen` WHERE `nombre` LIKE '".$nombre."%' AND `categoria` LIKE '".$categoria."%' AND `descripcion` LIKE '".$descripcion."%' AND `precio`LIKE '".$precio."%' AND`stock`LIKE '".$stock."%' AND`foto`LIKE '".$foto."%'");

			
			$nfilas1=mysqli_num_rows($consulta);
			
			if ($nfilas1>0){
				print"<table id='maquinas'><tr>";
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

</section>
















<?php 

}
else {
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
	<img id="imagen" src="imagenes/buscador/fondo.jpg">
	<div id="botones">
		<INPUT TYPE='submit' id='botonA' NAME='enviar' value="A">
		<INPUT TYPE='submit' id='botonB' NAME='buscar' value="B">
	</div>
</section>
<aside> 
	<center>
		<table>
			<tr>
				<td><h1>MAQUINA</h1></td><td><input type="text" id="nombre" name="nombre" placeholder="Nombre de la maquina"></td>
			</tr>
			<tr>
				<td><h1>CATEGORIA</h1></td><td><input type="text" id="categoria" name="categoria" placeholder="Categoria"></td>
			</tr>
			<tr>
				<td><h1>DESCRIPCIÓN</h1></td><td><input type="text" id="descripción" name="descripcion" placeholder="Descripción"></td>
			</tr>
			<tr>
				<td><h1>PRECIO</h1></td><td><input type="text" id="precio" name="precio" placeholder="Precio"></td>
			</tr>
			<tr>
				<td><h1>STOCK</h1></td><td><input type="text" id="stock" name="stock" placeholder="Stock"></td>
			</tr>
			<tr>
				<td><h1>FOTO</h1></td><td><input type="text" id="foto" name="foto" placeholder="Foto"></td>
			</tr>
		</table>


	</center>

</aside>
<br>
<br><br>

<?php 
	}
	

print"</form>";
}

?>

<?php
		

		print"</center>";
		//header("Location: .php");
	
?>


</body>
</html>