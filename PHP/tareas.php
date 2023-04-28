<?php
session_start();

if (isset($_POST['nombre_tarea'])) {
	$nombre_tarea = $_POST['nombre_tarea'];
	$id_tarea = count($_SESSION['tareas']) + 1;
	$_SESSION['tareas'][$id_tarea] = $nombre_tarea;
}

header('Location: ../HTML/tablaHTML.php');
exit();
?>