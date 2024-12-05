<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="?view=usuarios">Usuarios</a></li>
            <li><a href="?view=psicologos">Psicólogos</a></li>
            <li><a href="?view=reseñas">Reseñas</a></li>
            <li><a href="?view=citas">Citas</a></li>
            <li><a href="?view=pagos">Pagos</a></li>
        </ul>
        <button class="logout-button" onclick="window.location.href='logout.php'">Salir</button>
    </div>
    <div class="main">
        <?php
        if (isset($_GET['view'])) {
            $view = $_GET['view'];
            switch ($view) {
                case 'usuarios':
                    include '../src/views/usuarios.php';
                    break;
                case 'psicologos':
                    include '../src/views/psicologos.php';
                    break;
                case 'reseñas':
                    include '../src/views/reseñas.php';
                    break;
                case 'citas':
                    include '../src/views/citas.php';
                    break;
                case 'pagos':
                    include '../src/views/pagos.php';
                    break;
                default:
                    echo "<h1>Bienvenido al Dashboard</h1>";
                    break;
            }
        } else {
            echo "<h1>Bienvenido al Dashboard</h1>";
        }
        ?>
    </div>
</body>
</html>