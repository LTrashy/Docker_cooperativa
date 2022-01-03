<?php
    echo '<h1>Hola mondiu, how are you do?</h1>';

    $conexion = new PDO('mysql:host=mysqldb;dbname=cooperativa', 'root', 'root');

    $res = $conexion->query('SHOW DATABASES');
    var_dump($res->fetch(PDO::FETCH_ASSOC));
?>