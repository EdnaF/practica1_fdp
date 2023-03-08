<?php
include_once('db2.php');

//Recibo todo los datos del formulario
$Hipertension=$_POST['Hipertension'];
$Sal=$_POST['Sal'];
$Dolor = $_POST['Dolor'];
$Insomnio=$_POST['Insomnio'];
$Cansancio=$_POST['Cansancio'];
$Hemorragia=$_POST['Hemorragia'];
$Mareos=$_POST['Mareos'];
$Medicacion=$_POST['Medicacion'];
$Presion=$_POST['Presion'];
$Palpitaciones=$_POST['Palpitaciones'];
$Aparato=$_POST['Aparato'];
$Diagnostico=$_POST['Diagnostico'];
$Actividad=$_POST['Actividad'];
$Enlatados=$_POST['Enlatados'];
$Embutidos=$_POST['Embutidos'];
$Carnes=$_POST['Carnes'];
$Mantequillas=$_POST['Mantequillas'];





//echo "Los Datos Son los Siguientes: <br>";
//echo "$Hipertension,$Sal,$Dolor,$Insomnio,$Cansancio,$Hemorragia,$Mareos,$Medicacion,$Presion,$Palpitaciones,$Aparato,$Diagnostico,$Actividad,$Enlatados,$Embutidos,$Carnes y $Mantequillas";

 $conectar=conn(); //ejecuta las conexiones a la db
 $sql="INSERT INTO hipertension (Hipertension, Sal, Dolor, Insomnio, Cansancio, Hemorragia, Mareos, Medicacion, Presion, Palpitaciones, Aparato, Diagnostico, Actividad, Enlatados, Embutidos, Carnes, Mantequillas)
 VALUES ('$Hipertension', '$Sal', '$Dolor', '$Insomnio', '$Cansancio', '$Hemorragia', '$Mareos', '$Medicacion', '$Presion', '$Palpitaciones',  '$Aparato', '$Diagnostico','$Actividad', '$Enlatados', '$Embutidos', '$Carnes', '$Mantequillas')";
 $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);
 
echo "Gracias por participar"
?>