<?php
$conn = new mysqli('db', 'cloud_user', 'cloud_pass', 'cloud');

if ($conn->connect_errno) {
    http_response_code(503);
    exit('No se pudo conectar a MariaDB');
}

$result = $conn->query('SELECT id, nombre, precio FROM productos');
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><title>Productos</title></head>
<body>
  <h1>Productos desde MariaDB</h1>
  <ul>
  <?php while ($row = $result->fetch_assoc()): ?>
    <li><?= htmlspecialchars($row['nombre']) ?>: $<?= $row['precio'] ?></li>
  <?php endwhile; ?>
  </ul>
</body>
</html>
<?php $conn->close(); ?>
