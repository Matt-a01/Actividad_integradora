<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="stylesheet" href="../CSS/tabla.css">
</head>
<body>

    <div class="lc">
        <div class="lh">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS90iTv-TnzsHB9FcVOX-o5qzj1pMogbm0qgugmiyKMJQI73O49rg-EopUNDWz_EqCf_lw&usqp=CAU" alt="Logo">
            <h1>TAREAS</h1>
        </div>
    </div>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Tarea</th>
				<th>Editar</th>
				<th>Borrar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($_SESSION['tareas'] as $id_tarea => $nombre_tarea): ?>
				<tr>
					<td><?php echo $id_tarea; ?></td>
					<td><?php echo $nombre_tarea; ?></td>
					<td><a href="editar_tarea.php?id=<?php echo $id_tarea; ?>">Editar</a></td>
					<td><a href="borrar_tarea.php?id=<?php echo $id_tarea; ?>" onclick="return confirm('¿Estás seguro de que quieres borrar esta tarea?')">Borrar</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<br>
	<a href="tareas.html">Agregar tarea</a>
    
</body>
</html>

