<?php
session_start();

if (isset($_GET['id'])) {
	$id_tarea = $_GET['id'];
	unset($_SESSION['tareas'][$id_tarea]);
	header('Location: tablaHTML.php');
	exit();
} else {
	header('Location: tablaHTML.php');
	exit();
}
?>