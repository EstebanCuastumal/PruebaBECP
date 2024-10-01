<?php

$sql_usuarios = "SELECT * FROM t_usuarios";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$datos_usuarios = $query_usuarios->fetchAll(fetch_Style: PDO::FETCH_ASSOC);
