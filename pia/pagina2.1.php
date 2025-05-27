<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Condicionales y Bucles en PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="contenedor">
    <h1>Condicionales y Bucles en PHP</h1>

    <section>
        <h2>1. Condicional IF</h2>
        <?php
            $numero = 7;
            echo "<p>El número es $numero.</p>";
            if ($numero % 2 == 0) {
                echo "<p>Es un número par.</p>";
            } else {
                echo "<p>Es un número impar.</p>";
            }
        ?>
    </section>

    <section>
        <h2>2. Condicional SWITCH</h2>
        <?php
            $color = "rojo";
            echo "<p>Color seleccionado: $color</p>";
            switch ($color) {
                case "rojo":
                    echo "<p>El color representa pasión.</p>";
                    break;
                case "azul":
                    echo "<p>El color representa tranquilidad.</p>";
                    break;
                case "verde":
                    echo "<p>El color representa naturaleza.</p>";
                    break;
                default:
                    echo "<p>Color no reconocido.</p>";
            }
        ?>
    </section>

    <section>
        <h2>3. Bucle WHILE</h2>
        <p>Contador de 1 a 5:</p>
        <p>
        <?php
            $i = 1;
            while ($i <= 5) {
                echo "$i ";
                $i++;
            }
        ?>
        </p>
    </section>

    <section>
        <h2>4. Bucle FOR</h2>
        <p>Tabla del 3:</p>
        <ul>
        <?php
            for ($j = 1; $j <= 10; $j++) {
                $resultado = 3 * $j;
                echo "<li>3 × $j = $resultado</li>";
            }
        ?>
        </ul>
    </section>

    <a class="boton" href="index.php">Volver al menú</a>
</div>
</body>
</html>
