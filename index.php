<?php include 'funciones/funciones.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio - <?php echo parametros()['empresa']; ?></title>	  
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
    <div class="container-fluid text-center" id="banner">
        
        <div class="container">
            <h1>Los mejor</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate
           </p>
           <a class="btn btn-success  btn-lg" href="#">Solicitar Información!</a>
        </div>
    </div>  

    
    <section class="contenido" id="home">
       <div class="container" >
         <div class="col-md-12 text-center titulo-seccion">
         	<h2>Porque estudiar con nosotros?</h2>
         	<hr>
         </div>

         <div class="col-md-4 text-center">
         	<h2 >Titulo de Seccion</h2>
         	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
         </div>

         <div class="col-md-4 text-center">
         	<h2>Titulo de Seccion</h2>
         	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
         </div>


         <div class="col-md-4 text-center">
         	<h2>Titulo de Seccion</h2>
         	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
         </div>

       </div>
    </section>


    <section id="banner-medio">
        <div class="container">
            <div class="info-banner-medio">
                <h2>Los mejores cursos estan aqui!!</h2>
                <a href="#" class="btn btn-success">Inscribirme ahora</a>
            </div>
        </div>
    </section>

    <?php
      $cursos = getCursos(4);
    ?>

    <section class="contenido" id="cursos-destacados">
    	
      <div class="container">
    	  <div class="col-md-12 text-center titulo-seccion">
    		   <h2>Cursos Destacados</h2>
    		   <hr>
    	  </div>	    	
           
        <?php foreach ($cursos as $curso) { ?>              
          
    	   <div class="col-md-3">
	    		<h3 class="text-center"><?php echo $curso['nombre'] ; ?></h3>
	    		<img src="imagenes/<?php echo $curso['imagen'] ; ?>" class="img-responsive">
	    		<p><?php echo $curso['descripcion_corta'] ; ?></p>
	    		
                <a href="detalles.php?id=<?php echo $curso['id'] ; ?>" class="btn btn-info"> Detalles</a>
	    		<span class="precio-curso"><?php echo $curso['precio'] ; ?></span> <span class="mes-curso">/Mes</span>	    		
    	  </div>

        <?php } ?>

    </div>
    </section>

    <section>
        
    </section>

    </main>
    <!-- /.FIN DEL CONTENIDO -->

    <!-- INICIO DEL FOOTER -->
     <?php include 'includes/footer.php'; ?>
    <!-- /.FIN DEL FOOTER -->
    <?php include 'includes/script.php'; ?>
</body>
</html>