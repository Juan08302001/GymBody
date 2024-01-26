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
    $query= mysqli_query($conn,"SELECT * FROM productos");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BODY FIT/ PRODUCTOS</title>
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
        <form action="\BodyFit\controladores\agregarproductos.php" method="POST">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-inboxes-fill"></i>
              </span>
              <input type="text" class="form-control mb-3" name="nom" placeholder="Nombre del producto" required>
            </div>
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-grid"></i>
              </span>
              <input type="text" class="form-control mb-3" name="can" placeholder="Cantidades">
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-currency-dollar"></i>
              </span>
              <input type="number" class="form-control mb-3" name="pre" placeholder="Precio Mayoreo" required>
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-currency-dollar"></i>
              </span>
              <input type="number" class="form-control mb-3" name="pre_v" placeholder="Precio a vender" required>
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
              <i class="bi bi-info-square"></i>
              </span>
              <input type="txtarea" class="form-control mb-3" placeholder="Descripcion del producto" name="des">
            </div> 
                                    <input type="file" class="form-control mb-3" name="imagen">
                                    <button class="olvide1"><i class="bi bi-send"></i>Agregar productos</button>
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
                                        <th class="text-light1">Nombre</th>
                                        <th class="text-light1">Cantidad</th>
                                        <th class="text-light1">Precio Mayoritario</th>
										<th class="text-light1">Precio Venta</th>
                                        <th class="text-light1">Descripcion</th>
                                        <th class="text-light1">Imagen</th>
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
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['cantidad']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['precio']?></th>    
												<th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['precio_venta']?></th>
                                                <th style="background: rgba(255, 255, 255, .5);"><?php  echo $row['descripcion']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id_producto'] ?>" class="olvide1">Modificar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_producto'] ?>" class="olvide1">Baja</a></th>                                        
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