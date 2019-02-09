<?php
    #conexion a base de datos
    $user = 'root'; 
    $password = 'paralelepipedo'; 
    $host = 'localhost';
    $dbname = 'programacionsabado18'; 
    $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");
    
   
    try
    {
        $connection = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $parametros);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
        //echo 'Conectado a '.$connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }


?>
