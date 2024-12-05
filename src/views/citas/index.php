<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Citas</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Citas</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario ID</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($citas as $cita): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($cita->getId()); ?></td>
                        <td><?php echo htmlspecialchars($cita->getUsuarioId()); ?></td>
                        <td><?php echo htmlspecialchars($cita->getFecha()); ?></td>
                        <td><?php echo htmlspecialchars($cita->getHora()); ?></td>
                        <td><?php echo htmlspecialchars($cita->getEstado()); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>