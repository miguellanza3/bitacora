<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitacora_mantenimiento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$usuarios = $conn->query("SELECT id, nombre_usuario FROM usuarios")->fetch_all(MYSQLI_ASSOC);
$tipos_incidencia = $conn->query("SELECT id, tipo FROM tipos_incidencia")->fetch_all(MYSQLI_ASSOC);
$departamentos = $conn->query("SELECT id, departamento FROM departamentos")->fetch_all(MYSQLI_ASSOC);

echo json_encode([
    'usuarios' => $usuarios,
    'tipos_incidencia' => $tipos_incidencia,
    'departamentos' => $departamentos
]);

$conn->close();
?>
