<?php
require_once __DIR__ . '/../config/database.php';

$database = new Database();
$db = $database->getConnection();

$stmt = $db->query('SELECT * FROM usuario');
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Usuarios</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo htmlspecialchars($usuario['usuario_id']); ?></td>
                <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                <td><?php echo htmlspecialchars($usuario['correo_electronico']); ?></td>
                <td><?php echo htmlspecialchars($usuario['telefono']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>