<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
   

    


	session_start();
	if (isset($_SESSION['u_usuario'])) {
		
         $id=$_GET["id"];
        $login=$_GET["login"];
        $nombre=$_GET["nombre"];
         $correo=$_GET["correo"];
         $direccion=$_GET["direccion"];
        print $login ;
        print $nombre;
        print $correo;
        print $direccion;
      
        
        $conexion = mysqli_connect("localhost", "root", "","basedatos") or die ("No se puede conectar con el servidor");
        $proceso=mysqli_query($conexion,"UPDATE `usuarios` SET `nombre` = '".$nombre."', `contrasena` = '87321', `login` = 'JAVIER', `correo` = 'j.navasdam@gmail.comA', `direccion` = 'Calle codorniz N4 7cC' WHERE `usuarios`.`id` = 1;");
      	header("Location:usuario.php");
          }else{

            header("Location:login.php");
          }




    ?>
</body>
</html>