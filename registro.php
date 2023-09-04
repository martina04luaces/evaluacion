<?php
    $server="localhost";
    $user="root";
    $id="";
    $nombre="";
    $imagenusuario="";
    $pass="";
    $db="usario";
    $conexion= mysqli_connect($server, $user ,$id, $nombre, $imagenusuario,$pass ,$db) or DIE('error');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>FORMULARIO</h1>
        
        <div class="registro de usuario">
        
    
        <form action="conexion.php" method="POST">
            <section class="formu">
            
        
            <div class="formu">
            <label for="id">id</label> 
            <input type="text" name="id" required> 
    </div>
    <div class="formu">
            <label for="nombre">nombre</label> 
            <input type="text" name="nombre" required> 
    </div>
    <div class="img">
            <img src="" alt="">
            <label for="imagen_usuario">imagen usuario</label> 
            <input type="text" name="imagen_usuario" required> 
    </div>

    <div class="formu">
            <label for="pass">password</label> 
            <input type="text" name="pass" required> 
    </div>
    </div>
    <form>
    <?php
    if(isset($_POST['enviar'])){
        $id=$POST['id'];
        $nombre=$_POST['nombre'];
        $imagenusuario=$POST['imagen usuario'];
        $pass=$_POST['contrasenia'];
        $sql= "INSERT INTO usuarios (nombre, contrasenia) VALUES ('$nombre', '$contrasenia')";
        $insertar= mysqli_query($conexion, $sql) ?print("<script> alert('reg. ingresado correctamente'); window.location= 'registro.php'</script>"): print("<script> alert ('error al insertar el registro')</script>");
    }

    ?>
    <?php
    
    echo '<h2>registro de usuarios</h2>';
    $sql2="SELECT * FROM usuario";
    $consulta= mysqli_query($conexion,$sql2);
</form>
</body>
</html>