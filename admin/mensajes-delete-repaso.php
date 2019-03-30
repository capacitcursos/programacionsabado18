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

    $sql = "SELECT * from mensajes ORDER BY id DESC";
    $query = $connection->prepare($sql);
    $query->execute();   
    $result= $query->fetchAll();
    $total= count($result);

  ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'includes/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lista de Mensajes   <a href="#" class="disabled btn btn-success">+ Agregar</a>      
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

    </section>
    <!-- Main content -->
    <section class="content container-fluid">
       
       <!-- LISTADO DE DATOS -->
    <div class="col-sm-12">       
       <div class="box box-default">   

       <?php 
       $total = 0; //Iniciamos variable total en cero

         if( isset($_GET['id']) ){ //verificamos si hay una id  en la url
                if ($_GET['id'] > 0 ) {    //verificamos si el id es mayor a cero               
                    
                    $sql = "SELECT * FROM mensajes WHERE id = " . $_GET['id'];
                    $query = $connection->prepare($sql);
                    $query->execute();
                    $total = $query->rowCount(); 
                }
         }

         if($total > 0 ) {
            $sql = "DELETE FROM mensajes WHERE id = " . $_GET['id'];
            $query = $connection->prepare($sql);
           // $query->execute();

            try {
                $query->execute();                
                echo '<script> window.location = "mensajes.php"; </script>';
                 $mensaje = '<p class="alert alert-success">Mensaje Eliminado con exito</p>';

            } catch (PDOException $e) {
                $mensaje = '<p class="alert alert-warning">Error al eliminar el registro '. $e->getMessage() .' </p>';       
            }
        }


      ?>         
          
          

          
        </div> 
      </div>             
 
       <!-- / FIN LISTADO DE DATOS -->


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