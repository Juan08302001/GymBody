<?php 
   include("C:\Apache24\htdocs\BodyFit\conexion\conexion.php");
$id=$_GET['id'];

$query=mysqli_query($conn,"SELECT * FROM usuarios WHERE id='$id'");
$row=mysqli_fetch_array($query);
?>
<?php
session_start();
$id = $_SESSION['username'];
if(!isset($id)){
    header("location: \BodyFit\index.php");
}
?>
<?php 
    include("C:\Apache24\htdocs\BodyFit\conexion\conexion.php");
    $query= mysqli_query($conn,"SELECT * FROM usuarios WHERE tipo_usuario='cliente'");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BODY FIT/ Actualizar trabajadores</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        <link href="../css/producto.css" rel="stylesheet">
           <!--Incluir bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
    </head>
    <body background="img/login-bg.jpg"a>
                <div class="container mt-5">
                    <form action="\BodyFit\controladores\modificarClientes.php" method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">  
                    <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-people"></i>
              </span>
              <input type="text" class="form-control mb-3" name="nom" placeholder="Ingrese el nombre completo" value="<?php echo $row['nombre']  ?>">
            </div>          
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-people"></i>
              </span>
              <input type="text" class="form-control mb-3" name="ape" placeholder="Ingrese los apellidos" value="<?php echo $row['apellidos'] ?>">
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-pencil-square"></i>
              </span>
              <input type="text" class="form-control mb-3" name="tel" placeholder="Ingrese el numero telefonico" value="<?php echo $row['numero']  ?>">
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-building"></i>
              </span>
              <input type="text" class="form-control mb-3" name="dom" placeholder="Ingrese el domicilio" value="<?php echo $row['domicilio']  ?>">
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-person"></i>
              </span>
              <input type="text" class="form-control mb-3" name="usu" placeholder="Ingrese el usuario" value="<?php echo $row['usuario']  ?>">
            </div>
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-lock"></i>
              </span>
              <input type="password" class="form-control mb-3" name="cla" placeholder="Ingrese la clave" value="<?php echo $row['clave']  ?>">
            </div> 
            
                            <center>
                            <button class="olvide1"><i class="bi bi-pen"></i></i>Modificar</button>
</form>
							<br><br>
                            <a href="./clientes.php" class="olvide1">
                                    <i class="bi bi-arrow-left"></i>Regresar
								</a>
</center>
                    </form>
                    
                </div>
    </body>
</html>