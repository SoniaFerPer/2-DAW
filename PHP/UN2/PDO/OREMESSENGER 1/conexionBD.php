<?php

// Configuración (Idealmente esto vendría de $_ENV, como vimos en el Módulo 6)
// Configuración PDO
$host = '127.0.0.1';
$port = 33060;
$dbname = 'oremessenger';
$user = 'root';
$pass = 'ejemplo_pass';

// Construimos el DSN
$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

// Opciones de configuración de PDO (Vitales para seguridad y comodidad)
$options = [
    // Si hay error, lanza una Excepción (en lugar de fallar en silencio)
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//    // Los datos vendrán siempre como Arrays Asociativos (más fácil de leer)
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    // Intentamos conectar
    $pdo = new PDO($dsn, $user, $pass, $options);
    // ("¡Conexión exitosa a la base de datos!");
} catch (PDOException $e) {
    // Si falla, capturamos el error específico de PDO
    // IMPORTANTE: En producción, nunca hagas 'echo' del error directo al usuario,
    // regístralo en un log interno.
    die("Error de conexión: " . $e->getMessage());
}

