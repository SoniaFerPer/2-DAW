<?php
include_once 'conexionBD.php';
include_once 'sesion.php';

checkSession(); //CON ESTO COMPROBAMOS SESION



if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //GUARDAR MENSAJE
    if(isset($_POST['save'])) {
        $body =trim($_POST['body'] ?? ''); //BODY ES EL CUERPO DEL MENSAJE, SI EXISTE LO RECUPERA Y SINO LO PONE VACIO
        if(!empty($body)) {
            $stmt = $pdo->prepare('INSERT INTO message (username, body) VALUES (:username, :body)');
            $stmt->bindValue(':username',$_SESSION['username'], PDO::PARAM_STR);
            $stmt->bindValue(':body', $body, PDO::PARAM_STR); //NO USA SESION PORQUE YA LO RECUPERAMOS ARRIBA CON POST
            $stmt->execute();
            header('Location: messages.php');
            exit;
        }

    }
    // Cancelar
    if (isset($_POST['cancel'])) {
        header('Location: messages.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Oretania Messenger - New message</title>
</head>

<body>
    <h2>Nuevo Mensaje</h2>
    <form method="post">
        <textarea name="body" rows="5" cols="50" required></textarea><br><br>
        <button type="submit" name="save">save</button>
        <button type="submit" name="cancel">Cancel</button>
    </form>
</body>
</html>