<?php include 'funciones/funciones.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contacto - <?php echo parametros()['empresa']; ?></title>    
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
        <h1>Contacto</h1> 
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</h2>     
      </div>      
   </section>

   <section class="contenido">
      <div class="container">
        <div class="col-md-3">
          <h3>Informaciones</h3>
          
          <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Telefono</h4>
                <span><?php echo parametros()['telefono']; ?></span>                
              </div>
          </div>

          <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Email</h4>
                <span><?php echo parametros()['email']; ?></span>                
              </div>
          </div>

          <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Direccion</h4>
                <span><?php echo parametros()['direccion']; ?></span>                
              </div>
          </div>


        </div>

        <div class="col-md-9">

          <?php if(isset($_POST['enviar'])){ 
              echo registrar_mensaje($_POST);
            } ?>


           <h3>Formulario de Contacto</h3>
           <form method="POST">
             <input type="text" name="nombre" class="form-control" placeholder="Nombre">

             <input type="text" name="apellido" class="form-control" placeholder="Apellido">

             <input type="text" name="asunto" class="form-control" placeholder="Asunto">

             <input type="text" name="telefono" class="form-control" placeholder="Telefono">

             <label>Mensaje</label>
             <textarea name="mensaje" class="form-control"></textarea>

             <button type="submit" name="enviar" class="btn btn-success">Enviar Mensaje</button>


           </form>
        </div>

      </div>     
   </section> 

   <section>
     <div class="container-fluid">
       <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14403.479553783354!2d-54.6295968!3d-25.5093855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses!2spy!4v1546711405752" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
         
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