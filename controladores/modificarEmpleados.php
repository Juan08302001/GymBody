
<?php
include ("../conexion/conexion.php");
$id=$_POST['id'];
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$edad=$_POST['edad'];
$dom=$_POST['dom'];
$tel=$_POST['tel'];
$cargo=$_POST['cargo'];

$sql="UPDATE trabajadores SET  nombre='$nom',apellidos='$ape',edad='$edad',domicilio='$dom',telefono='$tel',cargo='$cargo' WHERE id='$id'";

$query= mysqli_query($conn,$sql);
if($query)
{
    echo '<script>
    alert("Se modifico correctamente");
    window.location.href=
    "../vistas/admin/trabajadores.php";
</script>';
}
else
{
    echo " No se realizaron cambios";
}
?>