<?php
// Import BD connection
include_once('cn/connection.php');


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

// Recoger el código único del enlace
if (isset($_GET['codigo'])) {
    $codigo_unico = $_GET['codigo'];

    // Buscar el usuario por el código único
    $sql = "SELECT * FROM usuarios WHERE codigo_unico = :codigo_unico";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':codigo_unico' => $codigo_unico]);
    
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($usuario) {
        echo "<h2>Usuario Referido</h2>";
        echo "<p>Nombre: " . htmlspecialchars($usuario['nombre']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($usuario['email']) . "</p>";
    } else {
        echo "<p>Este enlace no es válido o el usuario no existe.</p>";
    }
} else {
    echo "<p>No se proporcionó un código válido.</p>";
}

// Include reference form
// save code as hidden data

// create graph
?>
