<?php 
//conexión a la base de datos
include_once 'inc/conexion.php';

$id = $_GET['id'];
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];


//Editar UPDATE tabla SET espacio WHERE id

$cnx_editar = 'UPDATE yt_colores SET color=?, descripcion=? WHERE id=?';
$jedicion = $mbd->prepare($cnx_editar);
$jedicion->execute(array($color,$descripcion,$id));

header('location:index.php');

