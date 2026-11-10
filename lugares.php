
<?php
require_once __DIR__ . "/php/conexion.php";

$sql = "SELECT * FROM lugares_historicos ORDER BY id_lugar ASC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lugares turísticos | CultuSanGil</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <nav class="navbar">

        <a href="index.php" class="logo">
            <span>CS</span> CultuSanGil
        </a>

        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="historia.php">Historia</a></li>
            <li><a href="cultura.php">Cultura</a></li>
            <li><a href="lugares.php">Lugares</a></li>
            <li><a href="personajes.php">Personajes</a></li>
            <li><a href="galeria.php">Galería</a></li>
        </ul>

        <a href="login.php" class="btn-login">Iniciar sesión</a>

    </nav>
</header>

<main class="pagina-lugares">

    <section class="encabezado-lugares">

        <p class="etiqueta">DESCUBRE NUESTRO MUNICIPIO</p>

        <h1>Lugares turísticos de San Gil</h1>

        <p>
            Explora los lugares históricos y naturales
            que representan la belleza de nuestro municipio.
        </p>

    </section>

    <section class="lista-lugares">

        <?php if ($resultado && $resultado->num_rows > 0): ?>

            <?php while ($lugar = $resultado->fetch_assoc()): ?>

                <article class="tarjeta-lugar">

                    <img
                        src="<?php echo !empty($lugar['imagen']) ? htmlspecialchars($lugar['imagen']) : 'img/turismo.jpg'; ?>"
                        alt="<?php echo htmlspecialchars($lugar['nombre']); ?>"
                    >

                    <div class="contenido-lugar">

                        <h2>
                            <?php echo htmlspecialchars($lugar['nombre']); ?>
                        </h2>

                        <p>
                            <?php echo htmlspecialchars($lugar['descripcion']); ?>
                        </p>

                        <span>
                            📍 <?php echo htmlspecialchars($lugar['ubicacion'] ?? 'San Gil, Santander'); ?>
                        </span>

                    </div>

                </article>

            <?php endwhile; ?>

        <?php else: ?>

            <p>No hay lugares registrados todavía.</p>

        <?php endif; ?>

    </section>

</main>

<footer>
    <h3>CultuSanGil</h3>
    <p>Descubriendo y preservando la historia y cultura de San Gil.</p>
    <p>© 2026 CultuSanGil. Todos los derechos reservados.</p>
</footer>

</body>
</html>

