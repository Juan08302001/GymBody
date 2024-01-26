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
    <link href="../css/horario.css" rel="stylesheet">


    
    <title>BODY FIT/HORARIOS</title>
  </head>
<body>
    <div> 
<div class="title-cards">
		<h2>Horarios</h2>
	</div>
    <div class="container-card">
	
    <div class="card">
	<figure>
		<img src="../img/gym.png">
	</figure>
	<div class="contenido-card">
		<h3>Gimnasio</h3>
		<h8>Lunes a Viernes</h8>
		<p>6:00 AM - 10:00 PM</p>
        <h8>Sabados</h8>
        <p>8:00 AM - 2:00 PM</p>
	</div>
</div>
<div class="card">
	<figure>
		<img src="../img/zimba.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Zumba</h3>
		<h8>Lunes a Sabado</h8>
		<p>8:00AM - 10:00AM</p>
	</div>
</div>
<div class="card">
	<figure>
		<img src="../img/guarderia.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Guarderia</h3>
		<h8>Lunes a Viernes</h8>
		<p>9:00AM  a 9:00PM</p>
        <h8>Sabados</h8>
        <p>8:00AM - 2:00PM</p>
	</div>
</div>
<div class="card">
	<figure>
		<img src="../img/estacionamiento.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Estacionamiento</h3>
		<h8>Lunes a Viernes</h8>
		<p>6:00AM  a 10:00PM</p>
        <h8>Sabados y Domingos</h8>
        <p>8:30AM - 5:00PM</p>
	</div>
</div>
<br>
<div class="card">
	<figure>
		<img src="../img/tienda.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Tienda</h3>
		<h8>Lunes a Viernes</h8>
		<p>6:00AM  a 10:00PM</p>
        <h8>Sabados y Domingos</h8>
        <p>8:30AM - 5:00PM</p>
	</div>
</div>
</div>								<a href="../cliente/index.php">
                                    <button class="olvide1"><i class="bi bi-arrow-left"></i>Regresar</button>
								</a>
</body>
</html>