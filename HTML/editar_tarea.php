<?php
session_start();

if (isset($_GET['id']) && isset($_POST['nombre_tarea'])) {
	$id_tarea = $_GET['id'];
	$_SESSION['tareas'][$id_tarea] = $_POST['nombre_tarea'];
	header('Location: tablaHTML.php');
	exit();
}

if (isset($_GET['id'])) {
	$id_tarea = $_GET['id'];
	$nombre_tarea = $_SESSION['tareas'][$id_tarea];
} else {
	header('Location: tablaHTML.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar tarea</title>
    <link rel="stylesheet" href="../CSS/tareas.css">
</head>
<body>

	<h1>Editar tarea</h1>

	<form method="post" action="">

		<label for="nombre_tarea">Nombre de la tarea:</label>
		<input type="text" id="nombre_tarea" name="nombre_tarea" value="<?php echo $nombre_tarea; ?>">
		<input type="submit" value="Guardar cambios">

	</form>

</body>
</html>