<?php 
require 'funciones.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Curso Capacit</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

	<main>
		<a href="index.php">Volver</a>

		<div class="col-sm-4">
			<form method="post">
			   <h3>Ingrese los valores</h3>
			   
			   <input type="text" name="valor1" class="form-control" placeholder="Ingrese el primer valor">

			   <input type="text" name="valor2" class="form-control" placeholder="Ingrese el segundo valor">

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
		
		var_dump($_POST);

		if ($_POST["valor1"] && $_POST["valor2"] ) {
			//echo "no estan vacios";
			$valor1= $_POST["valor1"];
            $valor2= $_POST["valor2"];

            if ($_POST["operacion"]=='suma') {
            	 $resultado= sumar($valor1, $valor2);
            }

            if ($_POST["operacion"]=='multiplicacion') {
            	 $resultado= multiplicar($valor1, $valor2);
            }

            if ($_POST["operacion"]=='division') {
            	 $resultado= dividir($valor1, $valor2);
            }

            if ($_POST["operacion"]=='resta') {
            	 $resultado= restar($valor1, $valor2);
            }         

           }
		?>

		<?php if ($resultado) { ?>
            <div class="col-sm-12">
            	<h2> El Resultado es: <?php echo $resultado; ?></h2>
            </div>	
        <?php } ?>
	</main>

</body>
</html>