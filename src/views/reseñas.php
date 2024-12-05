<?php
require_once __DIR__ . '/../config/database.php';

$database = new Database();
$db = $database->getConnection();

$stmt = $db->query('SELECT * FROM resenas');
$resenas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Reseñas</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario ID</th>
            <th>Psicólogo ID</th>
            <th>Calificación</th>
            <th>Comentario</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resenas as $resena): ?>
            <tr>
                <td><?php echo htmlspecialchars($resena['resena_id']); ?></td>
                <td><?php echo htmlspecialchars($resena['usuario_id']); ?></td>
                <td><?php echo htmlspecialchars($resena['psicologo_id']); ?></td>
                <td><?php echo htmlspecialchars($resena['calificacion']); ?></td>
                <td><?php echo htmlspecialchars($resena['comentario']); ?></td>
                <td><?php echo htmlspecialchars($resena['fecha']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>