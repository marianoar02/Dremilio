<?php
$servername = "localhost";
$username = "root";
$passwordbdd = "";
$dbname = "bdd";

$nomus = $_POST["nomus"];
$nombre = $_POST["nombre"];
$ape = $_POST["ape"];
$email = $_POST["email"];
$password = $_POST["password"];
// Create connection
$conn = new mysqli($servername, $username, $passwordbdd, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registro (nomus,nombre,ape,email,password)
VALUES (' " . $nomus . " ', ' ". $nombre ."','". $ape. "','". $email ."','". $password ."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>