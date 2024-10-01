<?php

include('../../config.php');

$email = $_POST['email'];
$clave = $_POST['clave_usuario'];

//Inicializar contador y preparar consulta sql para seleccionar al usuario que coincida con el email y contraseña ingresados
$contador = 0;
$sql = "SELECT * FROM t_usuarios WHERE email = '$email' AND clave_usuario = '$clave'";

//Preparar y ejecutar la consulta
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    echo $email_tabla;
}

//Validación de usuario:
//Contador en cero = no inicia sesión y se queda en login
if ($contador == 0) {
    header('Location: ' . $URL . '/login');
} else {
    session_start();
    $_SESSION['session_email'] = $email;
    header('Location: ' . $URL . '/index.php');
}

?>