<?php
// Conexión a la base de datos Mysql
try {
    $pdo = new PDO('mysql:host=db4free.net;dbname=sisinfpaises;port=3306', 'sistemasinf', 'sistemasinf');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si ocurre algún error, enviar un mensaje de error al cliente
    header('Content-Type: application/json');
    echo json_encode(['error' => $e->getMessage()]);
    exit();
}
?>
