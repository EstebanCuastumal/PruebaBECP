<?php

session_start();
if (isset($_SESSION['session_email'])) {
    $email = $_SESSION['session_email'];
    $sql = "SELECT * FROM t_usuarios WHERE email = '$email'";

    //preparar y ejecutar la consulta
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $nombres = $usuario['nombres'];
    }
    //echo "Sesion de " . $_SESSION['sesion_email'];
} else {
    header('Location: ' . $URL . '/login');
}