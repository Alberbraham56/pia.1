<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Aleatorios en PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="contenedor">
    <h1>Números Aleatorios, Suma y Media</h1>

    <section>
        <?php
            $numeros = [];
            $suma = 0;

            // Generar 10 números aleatorios entre 10 y 50
            for ($i = 0; $i < 10; $i++) {
                $num = rand(10, 50);
                $numeros[] = $num;
                $suma += $num;
            }

            $media = $suma / count($numeros);

            echo "<h2>Números generados:</h2>";
            echo "<p>" . implode(" - ", $numeros) . "</p>";
            echo "<h2>Suma:</h2><p>$suma</p>";
            echo "<h2>Media:</h2><p>" . round($media, 2) . "</p>";
        ?>
    </section>

    <a class="boton" href="pagina5.php">Generar nuevos números</a>
    <a class="boton" href="index.php">Volver al menú</a>
</div>
</body>
</html>
