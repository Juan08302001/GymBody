<?php

include ("../conexion/conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        echo '<script>
        alert("Se elimino cliente");
        window.location.href=
        "../vistas/admin/clientes.php";
    </script>';
    }
?>
