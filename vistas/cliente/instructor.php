<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    $query= mysqli_query($conn,"SELECT * FROM trabajadores WHERE cargo='Instructor'");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BODY FIT/ CLIENTES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/vistaCliente.css" rel="stylesheet">
        <!--Incluir bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
    </head>
    <body background="j.jpg">
            <div class="container mt-5">
                        <div class="col-md-8">
                            <table class="table">
                                <section class="form-login" >
                                    <tr>
                                        <th class="text-light1">Nombre(s)</th>
                                        <th class="text-light1">Apellidos</th>
                                        <th class="text-light1">Telefono</th>
                                        <th class="text-light1">Horario</th>
                                    </tr>
</section>
                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['nombre']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['apellidos']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['telefono']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['cargo']?></th>
                                            </tr>
                                        <?php
                                            }		
                                       ?>	
                                </tbody>
                            </table>
                            <a href="./index.php">
                                    <button class="olvide1"><i class="bi bi-arrow-left"></i>Regresar</button>
								</a>
                        </div>
                    </div>
    </body>
</html>
</body>
</html>