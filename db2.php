<?php
//Configuracion necesaria para acceder a la data base.
function conn(){
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "1234";
$dbname = "encuesta";
 
 // Generando la conexion con el servidor
 $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
 return $conectar;
}

?>