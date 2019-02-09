<?php 
//INICIAR VARIABLES DE SESSION
session_start();
//CREAR VARIABLES DE SESION
$_SESSION['nombre'] = "Juan";
$_SESSION['email'] = "juan@gmail.com";

//imprimir variable de session
echo $_SESSION['nombre'];


?>