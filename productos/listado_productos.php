<?php

$sql_productos = "SELECT * FROM t_productos";
$query_productos = $pdo->prepare($sql_productos);
$query_productos->execute();
$datos_productos = $query_productos->fetchAll(fetch_Style: PDO::FETCH_ASSOC);
