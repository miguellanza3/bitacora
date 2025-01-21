

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitacora_mantenimiento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$usuario_id = $_POST['usuario'];
$tipo_incidencia_id = $_POST['tipo_incidencia'];
$descripcion = $_POST['descripcion'];
$departamento_id = $_POST['departamento'];

$sql = "INSERT INTO bitacora (usuario_id, tipo_incidencia_id, descripcion, departamento_id)
        VALUES ('$usuario_id', '$tipo_incidencia_id', '$descripcion', '$departamento_id')";

if ($conn->query($sql) === TRUE) {
    //header("Location: index.html");
    header("Location: ../index.php?pagina=1");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

