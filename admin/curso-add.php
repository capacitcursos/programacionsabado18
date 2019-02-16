<?php
session_start();
if (!isset($_SESSION['logueado'])) {
  header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <?php include 'includes/header.php'; ?>  

  <?php 

  
   if (isset($_POST)) {
      if ($_POST['Guardar'] == 'Guardar' && $_POST['nombre'] != '' && $_POST['precio'] != '' && $_POST['duracion'] != '') {
            //CAPTURAR LOS DATOS RECIBIDOS DEL FORMULARIO VIA POST Y GUARDARLOS EN VARIABLES
            $nombre = $_POST['nombre'];
            $descripcion_corta = $_POST['descripcion_corta'];
            $descripcion_detallada= $_POST['descripcion_detallada'];
            $precio = $_POST['precio'];
            $duracion = $_POST['duracion'];
            $dias = $_POST['dias'];
            $activo = $_POST['activo'];
            $imagen = $_POST['imagen'];
            
            //guardar consulta sql a ejecutar en una variable
          $sql = 'INSERT INTO cursos (nombre, descripcion_corta,  descripcion_detallada, precio, duracion, dias, activo, imagen, fecha_add) VALUES (:nombre, :descripcion_corta,  :descripcion_detallada, :precio, :duracion, :dias, :activo, :imagen, NOW() )';
            
            //definir VARIABLE $data array() con los valores para la consulta SQL
            
            $data = array(
              'nombre' => $nombre,
              'descripcion_corta' => $descripcion_corta,
              'descripcion_detallada' => $descripcion_detallada,
              'precio' => $precio,               
              'duracion' => $duracion,
              'dias' => $dias,
              'activo' => $activo,
              'imagen' => $imagen

             );

            //preparar la consulta SQL
            $query = $connection->prepare($sql);
            
            try {
               
               $query->execute($data); //Ejecutamos la consulta
               //Guardamos un mensaje de exito en una variable
               $mensaje = '<p class="alert alert-success">Registrado correctamente</p>';
               //redireccionamos al listado de usuarios con JavaScript
               echo '<script> window.location = "cursos.php"; </script>';
            
            } catch (Exception $e) { //si hay algun error, guardamos en la variable $mensaje
             
              $mensaje = '<p class="alert alert-danger">'. $e .'</p>';

            }
      }
    } 

   ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'includes/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registro de Cursos <a href="cursos.php" class="btn btn-success"> Lista de Usuarios</a>      
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

    </section>
    <!-- Main content -->
    <section class="content container-fluid">
       
       <!-- FORMULARIO -->
    <div class="col-sm-12">       
       <div class="panel row"> 
        <?php include 'includes/mensajes.php'; ?>
        
          <form action="" method="POST">
            <div class="form-group col-md-6">
              <label>Nombre</label>
              <input type="text" name="nombre" class="form-control" required> 

              <label>Descripcion Corta</label>
              <textarea class="form-control" name="descripcion_corta">
              </textarea>

              <label>Descripcion Detallada</label>
              <textarea class="form-control" name="descripcion_detallada">
              </textarea>            
              

              <label>Activo</label>
              <select class="form-control" name="activo" required>
                <option value="1"> SI</option>
                <option value="0"> NO</option>
              </select>

              <label>Precio</label>
              <input type="text" name="precio" class="form-control" required> 

              <label>Duracion</label>
              <input type="text" name="duracion" class="form-control" required> 

              <label>Dias</label>
              <input type="text" name="dias" class="form-control" required> 

              <label>Imagen</label>
              <input type="text" name="imagen" class="form-control" required> 

              <br>
              <input type="submit" class="btn btn-success" name="Guardar" value="Guardar">

            </div>
          </form>       
          
        </div> 
      </div>             
 
       <!-- / FIN FORMULARIO -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include 'includes/footer.php'; ?>  
 
 </div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>