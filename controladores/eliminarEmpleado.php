<?php

include ("../conexion/conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM trabajadores  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        echo '<script>
        alert("Se elimino trabajador");
        window.location.href=
        "../vistas/admin/trabajadores.php";
    </script>';
    }
?>
