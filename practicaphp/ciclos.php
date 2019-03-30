<?php 

echo "<h1>CICLOS</h1>";

//CICLO WHILE
echo "<h2>CICLO WHILE</h2>";

$x = 1;
while ($x <= 10) {
	echo "El valor de x es ".$x."<br>" ;
	$x++;	
}




//CICLO WHILE
echo "<h2>CICLO DO WHILE</h2>";
$i= 1;
do {
	echo "El numero es ".$i."<br>";
	$i++;	
} while ($i <= 5);
$x=1;
do {
	echo($x);
	$x++;
} while ($x <= 100);


//CICLO FOR
echo "<h2>CICLO FOR</h2>";

for ($i=0; $i < 10; $i++) { 
	
	echo "El numero es ".$i."<br>";
}


//FOREACH
echo "<h2>FOREACH</h2>";
$personas = array('Juan', 'Luis', 'Maria', 'Jose', 'Bernardo','Julio');

foreach ($personas as $row) {
 	echo $row."<br>";
} 


?>