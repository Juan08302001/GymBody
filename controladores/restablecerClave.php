<?php
include ("../conexion/conexion.php");
$usu=$_POST['usu'];
$cla=$_POST['cla'];

$sql="update usuarios set clave='$cla' where usuario='$usu'";
$query= mysqli_query($conn,$sql);

if($query){
    echo '<script>
    alert("Se restauro su clave");
    window.location.href=
    "../vistas/olvide.php";
</script>';
    
}else {
    echo '<script>
    alert("No se restauro su clave");
    window.location.href=
    "../vistas/olvide.php";
</script>';
}
?>