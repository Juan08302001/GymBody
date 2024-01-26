<?php
include ("../conexion/conexion.php");
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$tel=$_POST['tel'];
$dom=$_POST['dom'];
$usu=$_POST['usu'];
$cla=$_POST['cla'];
$tipo=$_POST['tipo'];

$sql="INSERT INTO usuarios VALUES (DEFAULT,'$nom', '$ape', '$tel', '$dom', '$usu', '$cla', '$tipo')";

$query= mysqli_query($conn,$sql);
if($query)
{
    echo '<script>
    alert("Se creo cuenta correctamente");
    window.location.href=
    "../vistas/crearcuenta.php";
</script>';
}
else
{
    echo " No se creo la cuenta";
}
?>