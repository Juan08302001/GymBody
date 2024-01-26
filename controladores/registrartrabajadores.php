<?php
include ("../conexion/conexion.php");
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$edad=$_POST['edad'];
$dom=$_POST['dom'];
$tel=$_POST['tel'];
$cargo=$_POST['cargo'];

$sql="INSERT INTO trabajadores VALUES (DEFAULT,'$nom', '$ape', '$edad', '$dom', '$tel', '$cargo')";

$query= mysqli_query($conn,$sql);
if($query)
{
    echo '<script>
    alert("Se creo cuenta correctamente");
    window.location.href=
    "../vistas/admin/trabajadores.php";
</script>';
}
else
{
    echo " No se creo la cuenta";
}
?>