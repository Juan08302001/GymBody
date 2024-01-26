<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!--Incluir CN  -->
     <!--Incluir bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <link rel="stylesheet" href="../vistas/css/olvide.css">
    <title>BODYFIT /RECUPERAR CLAVE</title>
</head>
<body class="fondo">
  <div class="container">
    <section class="formulario">
      <form action="../controladores/restablecerClave.php" method="post">
      <h1 class="text-light">BODYFIT</h1>
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-person"></i>
              </span>
              <input type="text" class="caja" placeholder="Ingrese su Usuario" name="usu">
            </div> 
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-lock"></i>
              </span>
              <input type="password" class="caja" placeholder="Ingrese su clave" name="cla">
            </div>  
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-lock"></i>
              </span>
              <input type="password" class="caja" placeholder="Confirmar clave" name="cla1">
            </div>  
            <button class="entrar"><i class="bi bi-key"></i>Recuperar clave</button>
          </form>
          <a href="../index.php" class="olvide">Regresar<i class="bi bi-arrow-left"></i></a>
    </section>
  </div>
</body>
</html>