<?php
require_once __DIR__ . '/../config/database.php';

$database = new Database();
$db = $database->getConnection();

$stmt = $db->query('SELECT * FROM pagos');
$pagos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Pagos</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario ID</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Método de Pago</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pagos as $pago): ?>
            <tr>
                <td><?php echo htmlspecialchars($pago['pago_id']); ?></td>
                <td><?php echo htmlspecialchars($pago['usuario_id']); ?></td>
                <td><?php echo htmlspecialchars($pago['monto']); ?></td>
                <td><?php echo htmlspecialchars($pago['fecha']); ?></td>
                <td><?php echo htmlspecialchars($pago['metodo_pago']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>