<?php
include ("../conexion/conexion.php");
session_start();
//Agregar conexion
$id = $_POST["usu"];
$nom = $_POST["cla"];
$query= mysqli_query($conn,"SELECT * FROM login WHERE usuario='".$id."' and clave= '".$nom."'");
$nr=mysqli_num_rows($query);
if($nr==1)
{
    echo "Bienvenido";
	header("Location: ../vistas/admin/index.php");
	$_SESSION['username'] =$id;
}
else if ($nr==0)
{
    echo " No ingreso";
}
?>