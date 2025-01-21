<?php
include_once('cn/connection.php');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Generar un código único
    $codigo_unico = uniqid('user_', true); // Genera un código único

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, email, codigo_unico) VALUES (:nombre, :email, :codigo_unico)";
    $stmt = $pdo->prepare($sql);
    
    // Ejecutar la consulta
    $stmt->execute([
        ':nombre' => $nombre,
        ':email' => $email,
        ':codigo_unico' => $codigo_unico,
    ]);

    // Obtener el enlace único
    $enlace_unico = "https://votopor.zarate.com.co/referido.php?codigo=$codigo_unico";
    
    echo "¡Registro exitoso! Comparte tu enlace único: <a href='$enlace_unico'>$enlace_unico</a>";
}
?>
