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
       
        $total = 0;
        
        if(isset($_GET['id'])){
            if($_GET['id'] > 0){
                $sql = "SELECT * FROM usuarios WHERE id = " . $_GET['id'];
                $query = $connection->prepare($sql);
                $query->execute();
                $total = $query->rowCount();

            }

        }


        //Actualizar datos del usuario
       if(isset($_POST)){

            if(isset($_POST['Actualizar'] ) && $_POST['Actualizar'] == 'Actualizar' && $_POST['nombre'] != '' && $_POST['email'] != ''  && $_POST['id'] > 0){
                   
                   $sql = "UPDATE usuarios set nombre = :nombre, email=:email, password=:password, avatar=:avatar, activo=:activo, fecha_update=NOW() WHERE id = " . $_POST['id'];
                   
                   $data =  array(
                        'nombre' => $_POST['nombre'],
                        'email' => $_POST['email'],
                        'password' => md5($_POST['password']),                        
                        'avatar' => $_POST['avatar'],
                        'activo' => $_POST['activo']
                   );
                    
                   $query = $connection->prepare($sql);
                   

                 try{

                    $query->execute($data);
                    //Ejecutamos la consulta
                     //Guardamos un mensaje de exito en una variable
                     $mensaje = '<p class="alert alert-success">Actualizado correctamente</p>';
                    //redireccionamos al listado de usuarios con JavaScript
                     echo '<script> window.location = "usuarios.php"; </script>';


                    } catch(Exception $e){
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
        Registro de Usuarios <a href="usuarios.php" class="btn btn-success"> Lista de Usuarios</a>      
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
         
         <?php if($total > 0) { 
           $usuario = $query->fetch();
           //var_dump($usuario);                 
          ?>  
          <form action="" method="POST">
            <div class="form-group col-md-6">
              <label>Nombre de Usuario</label>
              <input type="text" name="nombre" value="<?php echo $usuario['nombre']?>" class="form-control" required> 

              <label>E-mail</label>
              <input type="email" name="email" class="form-control" value="<?php echo $usuario['email']?>" required> 

              
              <label>Contraseña</label>
              <input type="password" name="password" value="<?php echo $usuario['password']?>" class="form-control" required> 


              <label>Activo</label>
              <select class="form-control" name="activo" required>
              <option value="1" <?php if($usuario['activo'] == 1){ echo 'selected'; } ?>  > SI</option>
              <option value="0" <?php if($usuario['activo'] == 0){ echo 'selected'; } ?> >  NO</option>
             
              </select>

              <label>Avatar</label>
              <input type="text" name="avatar" class="form-control" value="<?php echo $usuario['avatar']?>" required> 


              <input type="text" name="id" value="<?php echo $usuario['id']?>" class="form-control" required> 
                            <br>
              <input type="submit" class="btn btn-success" name="Actualizar" value="Actualizar">

            </div>
          </form>   

          <?php } ?>    
          
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