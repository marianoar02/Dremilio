<?php
$servername = "localhost";
$username = "root";
$passwordbdd = "";
$dbname = "bdd";

$nomus= $_GET['nomus'];

$conn=new mysqli($servername,$username,$passwordbdd,$dbname);
if($conn -> connect_error){
	die("conexion establecida" . $conn -> connect_error);
}
$sql="SELECT * FROM registro WHERE nomus ='". $nomus ."'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	echo "Logueado";
}else{
	echo "No existe el usuario";
}
$conn -> close();
?>