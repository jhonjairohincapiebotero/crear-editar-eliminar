<?php
//conexion base de datos

$mbd = new PDO('mysql:host=localhost;dbname=micodigo', 
$usuario = 'root', 
$contraseña ='');

//descripcion de conexión


try {
    $mbd = new PDO('mysql:host=localhost;dbname=micodigo', 
    $usuario = 'root', 
    $contraseña = '');

    //consejos de seguridad de conexión php 2020
    echo 'Estas Conectado a la base de datos<br> ';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
