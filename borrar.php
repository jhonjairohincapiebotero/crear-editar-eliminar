<?php 
//**************************************************************//
/*Autor:Jhon Jairo Hincapié Botero
  Agradecimieto: Todos los programadores que enseñan su código enseñanzas en youtube y demas buscadores*/

 //**************************************************************//
include_once 'inc/conexion.php';

$id = $_GET['id'];

$cnx_eliminar = 'DELETE FROM yt_colores WHERE id = ?';
$jborrar = $mbd->prepare($cnx_eliminar);
$jborrar->execute(array($id));

// Cerrar conexión a base de datos

$jborrar = null;
$mbd = null;

header('location:index.php');