
<?php
include ("../conexion/conexion.php");
$nom = $_POST['nom'];
$can = $_POST['can'];
$pre = $_POST['pre'];
$pre_v = $_POST['pre_v'];
$des = $_POST['des'];
$imagen = $_FILES['imagen'];

$sql="INSERT INTO productos VALUES (DEFAULT,'$nom','$can','$pre','$pre_v','$des','$imagen')";

$query= mysqli_query($conn,$sql);
if($query)
{
    echo '<script>
    alert("Se creo cuenta correctamente");
    window.location.href=
    "../vistas/admin/productos.php";
</script>';
}
else
{
    echo '<script>
    alert("No se registro");
    window.location.href=
    "../vistas/admin/productos.php";
</script>';
}
?>