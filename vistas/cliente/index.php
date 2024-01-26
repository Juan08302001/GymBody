<?php
session_start();
$id = $_SESSION['username'];
$mensajeBienvenida = "¡Bienvenido, " . $id . "!";
if(!isset($id)){
    header("location: \BodyFit\index.php");
}else{
// Pasar el mensaje personalizado a JavaScript utilizando una variable en HTML
echo '<input type="hidden" id="mensaje-bienvenida" value="' . $mensajeBienvenida . '">';

// Mostrar el mensaje personalizado en una alerta utilizando JavaScript
echo '<script>
        var mensajeBienvenida = document.getElementById("mensaje-bienvenida").value;
        alert(mensajeBienvenida);
    </script>';
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

     <!--Incluir bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="../css/clientes.css" />
    
    <title>BODY FIT/Menu</title>
  </head>
  <script>
    function confirmacion(){
        var respuesta = confirm("¿Deseas salir?");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>
  <body>
    <div class="menu-bar">
        <h1 class="logo"><img src="../img/BODY.jpg" height="60" width="80" class="imagen">BODYFIT</h1>
        
      <ul>
        <li><a href="horarios.php">Horarios</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="pago.php">Tipo de pago</a></li>
        <li><a href="instructor.php">Instructor</a></li>
        <li><a href="\BodyFit\controladores\cerrarsesion.php" onclick="return confirmacion()">Salir</a></li>          
      </ul>
    </div>
    
    <h3 class="letrero">Vive la experiencia BodyFit y disfruta de un ambiente agradable y seguro con las mejores 
      instalaciones al mejor precio.</h3>

      <div class="acomodar">
      <div class="card">
        <img src="../img/cardio.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Contamos con zona para realizar cardio.</p>
        </div>
      </div>
      <div class="card">
        <img src="../img/gym.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Contamos con un espacio amplio para el levantamiento de pesas.</p>
        </div>
      </div>
      <div class="card" >
        <img src="../img/zimba.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Contamos con una zona para realizar zumba.</p>
        </div>
      </div>
      </div>

      <div class="acomodar">
        <div class="card">
          <img src="../img/guarderia.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Contamos con guarderia.</p>
          </div>
        </div>
        <div class="card">
          <img src="../img/estacionamiento.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Contamos con estacionamiento.</p>
          </div>
        </div>
        <div class="card">
          <img src="../img/tienda.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Contamos con una tienda deonde puedes comprar suplementos o ropa.</p>
          </div>
        </div>
        <div class="card">
          <img src="../img/regaderas.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Contamos con regaderas.</p>
          </div>
        </div>
        </div>
      


    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/carrusel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Motivacion</h5>
              <p>Nos enfocamos en la ayuda de nuestros clientes.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/carrusel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Seguridad</h5>
              <p>Establecemos un excelente ambiente.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/carrusel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Maquinas</h5>
              <p>Tenemos los mejores aparatos para hacer ejercicio.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                    <img src="../img/BODY.jpg" alt="Logo BODYFIT">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos una oranizacion que se preocupa por tu bienestar.</p>
                <p>Esperamos atender todas tus comodidades.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.5430431002164!2d-100.73811502601868!3d21.79793958005095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ac9e58e862e13%3A0xea7ea64bf8f0f32b!2sGALO&#39;S%20GYM!5e0!3m2!1ses!2smx!4v1687837804314!5m2!1ses!2smx" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     

        <div class="grupo-2">
            <small>&copy; 2023 <b>BODYFIT</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
  </body>
</html>
