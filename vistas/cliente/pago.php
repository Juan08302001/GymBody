<?php
session_start();
$id = $_SESSION['username'];
$mensajeBienvenida = "¡Bienvenido, " . $id . "!";
if(!isset($id)){
    header("location: \BodyFit\index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

     <!--Incluir bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/pagos.css" rel="stylesheet">


    
    <title>BODY FIT/PAGOS</title>
  </head>
<body>
<div class="title-cards">
		<h2><FONT COLOR="white">Tipo de pagos</FONT></h2>
	</div>
<div class="container-card">
	
<div class="card">
	<figure>
		<img src="../img/BODY.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Visitas</h3>
		<h8>Precio de visita</h8>
		<p>Visita: $30.00</p>
		<a href="#">Pagar</a>
	</div>
</div>
<div class="card">
	<figure>
	<img src="../img/BODY.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Semana</h3>
		<h8>Precio de semana</h8>
		<p>Semana: $130.00</p>
		<a href="#">Pagar</a>
	</div>
</div>
<div class="card">
	<figure>
	<img src="../img/BODY.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Mensualidad</h3>
		<h8>Precio de mes</h8>
		<p>Mensualidad: $490.00</p>
		<a href="#">Pagar</a>
	</div>
</div>
</div>
								<a href="../cliente/index.php">
                                    <button class="olvide1"><i class="bi bi-arrow-left"></i>Regresar</button>
								</a>

        </body>
</html>