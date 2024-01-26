
<?php
include ("../conexion/conexion.php");
$id=$_POST['id'];
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$tel=$_POST['tel'];
$dom=$_POST['dom'];
$usu=$_POST['usu'];
$cla=$_POST['cla'];

$sql="UPDATE usuarios SET  nombre='$nom',apellidos='$ape',numero='$tel',domicilio='$dom', usuario='$usu', clave='$cla' WHERE id='$id'";

$query= mysqli_query($conn,$sql);
if($query)
{
    echo '<script>
    alert("Se modifico correctamente");
    window.location.href=
    "../vistas/admin/clientes.php";
</script>';
}
else
{
    echo " No se realizaron cambios";
}
?>