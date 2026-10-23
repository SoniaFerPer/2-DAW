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

        // 4. Obtener mensajes del usuario
        $sql = "SELECT * FROM message WHERE username = ? ORDER BY created_at DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
// 5. Mostrar error si las credenciales no son válidas
if ($error) {
    echo '<p style="color:red;">Usuario o contraseña incorrectos.</p>';
}

// 6. Mostrar mensajes del usuario
if ($messages !== null) {

    echo '<h2>Mensajes de ' . htmlspecialchars($username) . '</h2>';

    if (count($messages) === 0) {

        echo '<p>No tienes mensajes.</p>';

    } else {

        echo '<table border="1">';

        // Cabecera de la tabla
        echo '<tr>';

        foreach (array_keys($messages[0]) as $columna) {
            echo '<th>' . htmlspecialchars($columna) . '</th>';
        }

        echo '</tr>';

        // Filas de la tabla
        foreach ($messages as $fila) {

            echo '<tr>';

            foreach ($fila as $valor) {
                echo '<td>' . htmlspecialchars((string) $valor) . '</td>';
            }

            echo '</tr>';
        }

        echo '</table>';
    }
}
?>

        <!-- 7. Formulario para iniciar sesión -->

        <form method="POST" action="">

            <label>Usuario:
                <input type="text" name="username" value="<?= htmlspecialchars($username) ?>" required>
            </label>

            <br>

            <label>Contraseña:
                <input type="password" name="password" required>
            </label>

            <br>

            <button type="submit">Entrar</button>

        </form>

    </body>

</html>
