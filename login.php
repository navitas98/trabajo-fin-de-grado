<html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="css/login.css">

</head>
<body>


      <?php 
      if(isset($_POST['aceptar'])){
        session_start();
        $usuario=$_POST['usuario'];
        $contrasena=$_POST['contrasena'];
        $conexion = mysqli_connect("localhost", "root", "","basedatos") or die ("No se puede conectar con el servidor");
        $proceso=mysqli_query($conexion,"SELECT * FROM usuarios WHERE `nombre`='".$usuario."' AND `contrasena`='".$contrasena."'");
        if($proceso=mysqli_fetch_array($proceso)){
          $_SESSION['u_usuario']=$usuario;

          header("Location: inicio.php");
          }else{

            header("Location:login.php");
          }



      }else{

       ?>
         <div id="titulo">
    <center>
    <h1>LOG IN</h1>

  </center>
  </div>
    <div id="login">
      <form name='form-login' action="login.php" method="POST">
        <span class="fontawesome-user"></span>
          <input type="text" id="usuario" name="usuario" placeholder="Username">
       
        <span class="fontawesome-lock"></span>
          <input type="password" id="contrasena" name="contrasena" placeholder="Password">
        
        <input type="submit" value="Login" name="aceptar">

</div>
<?php } ?>
  </form>
</body>

</html>
