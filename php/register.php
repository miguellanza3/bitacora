<?php
$conn = new mysqli('localhost', 'root', '', 'login_sistema');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "Usuario registrado exitosamente.".'<br>';
        echo  '<a class="nav-link" href="../login.html">Login</a>';
        //header("Location: ../login.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
