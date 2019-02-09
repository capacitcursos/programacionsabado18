<?php
session_start();
echo $_SESSION['nombre']; 

echo "<br> <a href='salir.php'>salir</a>";

  //require 'funciones.php'; 
  //saludar("Juan");
   require '../conexion/conexion.php';
  
   $sql = "SELECT * from usuarios";
   $query = $connection->prepare($sql);
   $query->execute();   
   $result= $query->fetchAll();

   //print_r($result);
   //echo "<br> Los datos son";
   //echo $result['email'];
  
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Curso de Programacion</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

	<main>
		<a href="index.php">Volver</a>
		<h1>Lista de Usuarios</h1>

		<div class="col-sm-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Password</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
						<?php foreach ($result as $row) { ?> 			<tr> 
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td>
								<a href="">Eliminar</a>
								<a href="">Actualizar</a>
							</td>
						</tr>
						<?php } ?>	
					
				</tbody>


				
			</table>
		</div>	

	</main>

</body>
</html>
