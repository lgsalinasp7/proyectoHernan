<?php
require_once __DIR__ . '/../config/database.php';

$database = new Database();
$db = $database->getConnection();

$stmt = $db->query('SELECT * FROM psicologo');
$psicologos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Psicólogos</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Especialidad</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
            <th>Calificación</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($psicologos as $psicologo): ?>
            <tr>
                <td><?php echo htmlspecialchars($psicologo['psicologo_id']); ?></td>
                <td><?php echo htmlspecialchars($psicologo['nombre']); ?></td>
                <td><?php echo htmlspecialchars($psicologo['especialidad']); ?></td>
                <td><?php echo htmlspecialchars($psicologo['correo_electronico']); ?></td>
                <td><?php echo htmlspecialchars($psicologo['telefono']); ?></td>
                <td><?php echo htmlspecialchars($psicologo['calificacion']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>