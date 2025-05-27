<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="contenedor">
    <h1>Resultado</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST["nombre"]);
            $lenguajes = $_POST["lenguajes"] ?? [];

            echo "<p><strong>Nombre del estudiante:</strong> $nombre</p>";

            if (count($lenguajes) > 0) {
                echo "<p><strong>Lenguajes seleccionados:</strong></p><ul>";
                foreach ($lenguajes as $lenguaje) {
                    echo "<li>" . htmlspecialchars($lenguaje) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No se seleccionaron lenguajes.</p>";
            }
        } else {
            echo "<p>No se recibieron datos.</p>";
        }
    ?>

    <a class="boton" href="formulario.php">Volver al formulario</a>
</div>
</body>
</html>
