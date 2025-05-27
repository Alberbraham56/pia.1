<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos de Funciones en PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="contenedor">
    <h1>Ejemplos Prácticos: Funciones en PHP</h1>

    <section>
        <h2>Función sin parámetros</h2>
        <?php
            function saludar() {
                echo "<p>¡Hola! Esta es una función sin parámetros.</p>";
            }
            saludar();
        ?>
    </section>

    <section>
        <h2>Función con parámetros</h2>
        <?php
            function sumar($a, $b) {
                return $a + $b;
            }
            $resultado = sumar(5, 7);
            echo "<p>La suma de 5 y 7 es: $resultado</p>";
        ?>
    </section>

    <section>
        <h2>Función con valor por defecto</h2>
        <?php
            function multiplicar($a, $b = 2) {
                return $a * $b;
            }
            echo "<p>Multiplicar 4 por el valor por defecto (2): " . multiplicar(4) . "</p>";
            echo "<p>Multiplicar 4 por 5: " . multiplicar(4, 5) . "</p>";
        ?>
    </section>

    <a class="boton" href="index.php">Volver al menú</a>
</div>
</body>
</html>
