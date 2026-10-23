<?php
include_once 'conexionBD.php';
include_once 'sesion.php';
checkSession();

$username = $_SESSION['username'];

// 2. Cerrar sesión
if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_destroy();

    header('Location: index.php');
    exit;
}

// 3. Eliminar mensaje
// USA GET PARA UN ENLACE (consigue el enlace) Y POST PARA UN BOTON (manda una orden)
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
//
//    $id = $_POST['delete_id'];
//
//    $stmt = $pdo->prepare(
//        'DELETE FROM message WHERE id = ? AND username = ?'
//    );
//
//    $stmt->execute([$id, $username]);
//
//    header('Location: messages.php');
//    exit;
//}
if (isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];

    $stmt = $pdo->prepare(
        'DELETE FROM message WHERE id = ? AND username = ?'
    );

    $stmt->execute([$id, $username]);

    header('Location: messages.php');
    exit;
}

// 4. Obtener mensajes del usuario
$stmt = $pdo->prepare(
    'SELECT * FROM message WHERE username = ? ORDER BY created_at DESC'
);

$stmt->execute([$username]);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Oretania Messenger - Messages</title>
</head>

<body>

<h1>Mis mensajes</h1>

<p>
    Usuario: <?= htmlspecialchars($username) ?>
</p>

<?php
// 5. Mostrar mensajes
if (count($messages) === 0) {

    echo '<p>No tienes mensajes.</p>';

} else {
    ?>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Mensaje</th>
            <th>Fecha</th>
            <th>Acción</th>
        </tr>

        <?php
        foreach ($messages as $fila) {
            ?>

            <tr>
                <td><?= htmlspecialchars((string) $fila['id']) ?></td>

                <td><?= htmlspecialchars($fila['body']) ?></td>

                <td><?= htmlspecialchars($fila['created_at']) ?></td>

                <td>
                    <form method="POST" action="">
                        <input type="hidden" name="delete_id" value="<?= (int) $fila['id'] ?>"> <!--EL FORMULARIO ENVIA EL IDENTIFICADOR DEL MENSAJE CON ESTO Y EJECUTA CONSULTA DELETE (ARRIBA)-->
                        <a href="messages.php?delete_id=<?= (int) $fila['id'] ?>">Delete</a>
                        <!--<button type="submit">Delete</button> ESTO ES COMO BOTON-->
                    </form>
                </td>
            </tr>

            <?php
        }
        ?>

    </table>

    <?php
}
?>

<p>
    <a href="new.php">Create new message</a>
</p>

<p>
    <a href="messages.php?logout=1">Log out</a>
</p>

</body>
</html>










