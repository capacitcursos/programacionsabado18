<?php 

echo "<h1>CICLOS</h1>";

//CICLO WHILE
echo "<h2>CICLO WHILE</h2>";

$x = 1;

while ($x <= 10) {
	echo "El valor de la variable es ".$x."<br>";
	$x++;
}

//CICLO DO WHILE
echo "<h2>CICLO DO WHILE</h2>";
 $i=1;
 do {
 	echo "el valor de la variable es".$i."<br>";
 	$i++;
 } while ($i <= 10);


 //CICLO FOR
echo "<h2>CICLO FOR</h2>";

for ($i=1; $i < 10; $i++) { 
	echo "el valor de la variable es".$i."<br>";
}

//FOREACH
echo "<h2>FOREACH</h2>";

$personas = array('Juan', 'Luis', 'Maria', 'Jose', 'Bernardo','Julio');

foreach ($personas as $row) {
 	echo $row."<br>";
} 




 ?>