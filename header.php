<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LABCOM</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="assets/css/jquery.dm-uploader.min.css" rel="stylesheet">
  <link href="assets/css/datatables.min.css" rel="stylesheet">
  <link href="assets/css/jquery.datetimepicker.css" rel="stylesheet"/>  
  <link href="assets/css/styles.css" rel="stylesheet">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/jquery.dm-uploader.min.js"></script>
  <script src="assets/js/datatables.min.js"></script> 
  <script src="assets/js/jquery.datetimepicker.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<main class="main-wrap">
<div id="wrap"> 
  <header>
  <!-- Header con logo -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon in_icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
<?php if($_SESSION['logat'] == 1):
        if($_SESSION['user']['id_tipo'] == 1): ?>
          <li><a class="nav-link">Bienvenido, <strong><?php echo $_SESSION['user']['nombre']; ?></strong></a></li>
          <a class="nav-link hover-underline-animation" aria-current="page" href="articulos.php"  id=""> Articulos </a>
          <a class="nav-link hover-underline-animation" aria-current="page" href="tipo_articulo.php"  id=""> Tipo de Articulo </a> 
          <a class="nav-link hover-underline-animation" aria-current="page" href="equipos.php"  id=""> Equipos </a>          
          <a class="nav-link hover-underline-animation" aria-current="page" href="marcas.php"  id=""> Marcas </a>          
          <a class="nav-link hover-underline-animation" aria-current="page" href="usuarios.php"  id=""> Usuarios </a>          
          <a class="nav-link hover-underline-animation" aria-current="page" href="ingreso.php"  id=""> Ingreso </a>          
          <a class="nav-link hover-underline-animation" aria-current="page" href="salida.php"  id=""> Salida </a>          
          <li><a class="nav-link hover-underline-animation" href="log_out.php">Log out</a></li>
<?php   elseif($_SESSION['user']['id_tipo'] == 2): ?>
          <li><a class="nav-link">Bienvenido, <strong><?php echo $_SESSION['user']['nombre']; ?></strong></a></li>
          <li><a class="nav-link hover-underline-animation" href="log_out.php">Log Out</a></li>
<?php   elseif($_SESSION['user']['id_tipo'] == 3): ?>
          <li><a class="nav-link">Bienvenido, <strong><?php echo $_SESSION['user']['nombre']; ?></strong></a></li>  
          <li><a class="nav-link hover-underline-animation" href="log_out.php">Log Out</a></li>
<?php   endif; ?>
<?php else: ?>
            <li><a class="nav-link hover-underline-animation" href="registro.php">Registrese</a></li>
            <li><a class="nav-link hover-underline-animation" href="login.php">Login</a></li>
<?php endif; ?>
      </ul>      
    </div>
  </div>
  </nav>
  </header> 