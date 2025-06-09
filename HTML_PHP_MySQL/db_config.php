<?php
$servername = "localhost"; // Generalmente localhost
$username = "root";        // Tu usuario de MySQL
$password = "";            // Tu contraseña de MySQL (vacía si no tienes)
$dbname = "calificaciones_db"; // El nombre de la base de datos que creaste

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Opcional: Establecer el conjunto de caracteres a UTF-8
$conn->set_charset("utf8mb4");
?>
