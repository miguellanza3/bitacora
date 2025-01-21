<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitacora_mantenimiento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM `usuarios`; ";

$result = $conn->query($sql);

$usuarios = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($usuarios);



$conn->close();
?>