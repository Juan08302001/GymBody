<?php
session_start();
$id = $_SESSION['username'];
$mensajeBienvenida = "¡Bienvenido, " . $id . "!";
if(!isset($id)){
    header("location: \BodyFit\index.php");
}
?>
<?php 
    include("C:\Apache24\htdocs\BodyFit\conexion\conexion.php");
    $query= mysqli_query($conn,"SELECT * FROM trabajadores");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BODY FIT/ TRABAJADORES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/producto.css" rel="stylesheet">
        <!--Incluir bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
    </head>
    <body background="j.jpg">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 class="texto">Ingrese datos</h1>
        <form action="\BodyFit\controladores\registrartrabajadores.php" method="POST">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-people"></i>
              </span>
              <input type="text" class="form-control mb-3" name="nom" placeholder="Ingrese el Nombre completo" required>
            </div>
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-people"></i>
              </span>
              <input type="text" class="form-control mb-3" name="ape" placeholder="Ingrese los Apellidos">
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-pencil-square"></i>
              </span>
              <input type="number" class="form-control mb-3" name="edad" placeholder="Ingrese la edad" required>
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-building"></i>
              </span>
              <input type="text" class="form-control mb-3" name="dom" placeholder="Ingrese el domicilio" required>
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-phone"></i>
              </span>
              <input type="text" class="form-control mb-3" name="tel" placeholder="Ingrese el telefono" required>
            </div> 
            <select class="form-select" aria-label="Default select example" name="cargo">
  <option selected>Selecciona el cargo</option>
  <option value="Instructor">Instructor</option>
  <option value="Recepcionista">Recepcionista</option>
  <option value="Limpieza">Limpieza</option>
  <option value="Vendedor">Vendedor</option>
  <option value="Guarderia">Guarderia</option>
  <option value="Estacionamiento">Estacionamiento</option>
</select><br>
           
                                    <button class="olvide1"><i class="bi bi-send"></i>Registrar empleados</button>
    </form>
								<br>
								<a href="../admin/index.php">
                                    <button class="olvide1"><i class="bi bi-arrow-left"></i>Regresar</button>
								</a>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <section class="form-login" >
                                    <tr>
                                        <th class="text-light1">Nombre(s)</th>
                                        <th class="text-light1">Apellidos</th>
                                        <th class="text-light1">Edad</th>
										<th class="text-light1">Domicilio</th>
                                        <th class="text-light1">Telefono</th>
                                        <th class="text-light1">Cargo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
</section>
                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['nombre']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['apellidos']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['edad']?></th>    
												<th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['domicilio']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['telefono']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['cargo']?></th>
                                                <th><a href="../admin/actualizarEmpleado.php?id=<?php echo $row['id'] ?>" class="olvide1"><i class="bi bi-pen"></i></a></th>
                                                <th><a href="\BodyFit\controladores\eliminarEmpleado.php?id=<?php echo $row['id'] ?>" class="olvide1"><i class="bi bi-trash"></i></a></th>                                        
                                            </tr>
                                        <?php
                                            }		
                                       ?>	
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>