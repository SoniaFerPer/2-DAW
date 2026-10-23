<?php

global $pdo;
include_once 'conexionBD.php';
include_once 'sesion.php';

$error = false;
$messages = null;
$username = '';


// 1. Procesar formulario (POST)
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // 2. Validar usuario
    $stmt = $pdo->prepare('SELECT * FROM person WHERE username = ? AND password = ?');

    $stmt->execute([$username, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // 3. Comprobar si el usuario es válido
    if ($user) {
        $_SESSION['username'] = $user['username'];  // GUARDA EL USUARIO EN SESION
        header('Location: messages.php');  //REDIRIGE AL USUARIO A LA PAGINA DE MENSAJES
        exit;   //EVITA QUE PHP SIGA EJECUTANDO EL RESTO DEL SCRIPT DESPUES DE LA REDIRECCION

    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Primera práctica de PDO en PHP</title>
</head>

<body>

<h1>Mensajes para usuario</h1>

<?php
if ($error) {
    echo '<p style="color:red;">Usuario o contraseña incorrectos.</p>';
}
?>

<form method="POST" action="">

    <label>
        Usuario:
        <input type="text" name="username" required>
    </label>

    <br>

    <label>
        Contraseña:
        <input type="password" name="password" required>
    </label>

    <br>

    <button type="submit">Entrar</button>

</form>

</body>
</html>
