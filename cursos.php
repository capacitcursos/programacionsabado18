<?php include 'funciones/funciones.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Cursos - <?php echo parametros()['empresa']; ?></title>    
    <meta name="description" content="Cursos de programacion y diseño en Ciudad del este- Paraguay">
    <meta name="keywords" content="programacion, Cursos, diseño, ciudad del este">
    <?php include 'includes/head.php'; ?>    
</head>
<body>
    <!-- INICIO DEL HEADER -->
     <?php include 'includes/header.php'; ?>
    <!-- /.FIN DEL HEADER -->

    <!-- INICIO DEL CONTENIDO -->
    <main>
   <section class="main-header">
      <div class="container">
        <h1>Cursos</h1> 
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</h2>     
      </div>      
   </section>

   <section class="contenido" id="cursos-destacados">
      
      <div class="container">
             

         <div class="col-md-3">
          <h3 class="text-center">Titulo del Curso</h3>

          <img src="imagenes/course01.jpg" class="img-responsive">

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>

          <a href="#" class="btn btn-info"> Detalles</a>

          <span class="precio-curso">500.000Gs</span> <span class="mes-curso">/Mes</span>
          
        </div>


        <div class="col-md-3">
          <h3 class="text-center">Titulo del Curso</h3>

          <img src="imagenes/course01.jpg" class="img-responsive">

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>

          <a href="#" class="btn btn-info"> Detalles</a>

          <span class="precio-curso">500.000Gs</span> <span class="mes-curso">/Mes</span>
          
        </div>


        <div class="col-md-3">
          <h3 class="text-center">Titulo del Curso</h3>

          <img src="imagenes/course01.jpg" class="img-responsive">

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>

          <a href="#" class="btn btn-info"> Detalles</a>

          <span class="precio-curso">500.000Gs</span> <span class="mes-curso">/Mes</span>
          
        </div>


        <div class="col-md-3">
          <h3 class="text-center">Titulo del Curso</h3>

          <img src="imagenes/course01.jpg" class="img-responsive">

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>

          <a href="#" class="btn btn-info"> Detalles</a>

          <span class="precio-curso">500.000Gs</span> <span class="mes-curso">/Mes</span>
          
        </div>

    </div>
    </section>
    </main>
    <!-- /.FIN DEL CONTENIDO -->

    <!-- INICIO DEL FOOTER -->
     <?php include 'includes/footer.php'; ?>
    <!-- /.FIN DEL FOOTER -->
    <?php include 'includes/script.php'; ?>
</body>
</html>
