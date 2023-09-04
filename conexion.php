<?php
$server="localhost";
$user="root";
$id="";
$nombre="";
$imagenusuario="";
$pass="";
$db="usuario";
$conexion= myseqli_connect($server, $user,$id,$nombre,$imagenusuario, $pass ,$db) or DIE('error');
$sql="INSERT INTO usuario(id, nombre,imagenusuario, pass) VALUES('1','jose','','1234')";
$insertar= mysqlii_query($conexion,$sql)? print('reg.Ingresado'): print('error al guardar');
$sql2="UPDATE usuario SET pass='1234' WHERE nombre='jose' ";
?>
