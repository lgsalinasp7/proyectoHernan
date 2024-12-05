<?php
require_once __DIR__ . '/../config/database.php';

$database = new Database();
$db = $database->getConnection();

$stmt = $db->query('SELECT * FROM citas');
$citas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Citas</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario ID</th>
            <th>Psicólogo ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($citas as $cita): ?>
            <tr>
                <td><?php echo htmlspecialchars($cita['cita_id']); ?></td>
                <td><?php echo htmlspecialchars($cita['usuario_id']); ?></td>
                <td><?php echo htmlspecialchars($cita['psicologo_id']); ?></td>
                <td><?php echo htmlspecialchars($cita['fecha']); ?></td>
                <td><?php echo htmlspecialchars($cita['hora']); ?></td>
                <td><?php echo htmlspecialchars($cita['estado']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>