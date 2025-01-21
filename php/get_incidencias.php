

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitacora_mantenimiento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT b.descripcion, b.fecha_actual, u.nombre_usuario, t.tipo, d.departamento
        FROM bitacora b
        JOIN usuarios u ON b.usuario_id = u.id
        JOIN tipos_incidencia t ON b.tipo_incidencia_id = t.id
        JOIN departamentos d ON b.departamento_id = d.id
        ORDER BY b.fecha_actual DESC ";

$result = $conn->query($sql);

$incidencias = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($incidencias);

$conn->close();
?>
