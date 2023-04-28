
<?php

$usuario_correcto = "Polier10090";
$contraseña_correcta = "210PPSC10090";

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];


// Validar los datos
if ($usuario == $usuario_correcto && $contraseña == $contraseña_correcta) {
  // Redirigir al usuario a otra página
  header('Location: HTML\tareas.html');
} else {
  // Redirigir al usuario a la página de inicio de sesión con el parámetro "alerta=1"
  header('Location: index.html?alerta=1');
}
?>