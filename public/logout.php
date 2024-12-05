<?php
// Aquí puedes agregar la lógica para cerrar la sesión del usuario
// Por ejemplo, destruir la sesión y redirigir al usuario a la página de inicio de sesión

session_start();
session_destroy();
header("Location: login.php");
exit();