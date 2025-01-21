<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bitacora_mantenimiento', 'root', '');
    //echo 'Conectado';
} catch (PDOException $e) {
    //print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

ini_set('display_errors', 0);
?>
