
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
</head>
<body>
    <h1>Panel de Administración</h1>
    <?php if (session()->rol === 'admin') : ?>
        <p>Bienvenido, <?= session('nombre') ?> (<?= session('rol') ?>)</p>
        <!-- Contenido del panel de administración -->
    <?php else : ?>
        <p>No tienes acceso a esta página.</p>
    <?php endif; ?>
    <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
</body>
</html>
