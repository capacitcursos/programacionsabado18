<?php 
  require 'funciones.php'; 
  //saludar("Juan");
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
		<div class="col-sm-4">
			<form method="post" action="">
			<h3>Ingrese los valores</h3>
			
			<input type="text" name="valor1" class="form-control" placeholder="Ingrese el valor 1">
			
			<input type="text" name="valor2" class="form-control" placeholder="Ingrese el valor 2">

			<select name="operacion" class="form-control">
				<option value="suma">Sumar</option>
				<option value="resta">Restar</option>
				<option value="division">Dividir</option>
				<option value="multiplicacion">Multiplicar</option>
			</select>

			<input type="submit" name="enviar" class="btn btn-success" value="Calcular">

		</form>
		</div>

		 <?php 
		 
		 //var_dump($_POST);   
		 
		 if (isset($_POST["valor1"]) && isset($_POST["valor2"])) {		  	
                
                $valor1= $_POST["valor1"];
                $valor2= $_POST["valor2"];


             
             if ($_POST["operacion"] == 'suma') {
             	$result = sumar($valor1, $valor2);
             }

             if ($_POST["operacion"] == 'resta') {
             	$result = restar($valor1, $valor2);
             }

             if ($_POST["operacion"] == 'multiplicacion') {
             	$result = multiplicar($valor1, $valor2);
             }

             if ($_POST["operacion"] == 'division') {
             	$result = dividir($valor1, $valor2);
             }
		 
		 }		   
		?>

		<?php
		if ($result) {  ?>
		 	<div class="col-sm-12">
			  <h3>El resultado de la operacion es <?php echo $result; ?></h3>
		    </div>
		 <?php } ?>

	</main>

</body>
</html>
