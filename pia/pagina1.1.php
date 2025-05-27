<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos en PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Demostración de Fundamentos de PHP</h1>

        <section>
            <h2>1. Variables</h2>
            <?php
                $nombre = "Ana";
                $edad = 25;
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Edad: $edad</p>";
            ?>
        </section>

        <section>
            <h2>2. Operadores</h2>
            <?php
                $a = 10;
                $b = 5;
                $suma = $a + $b;
                $producto = $a * $b;
                echo "<p>$a + $b = $suma</p>";
                echo "<p>$a × $b = $producto</p>";
            ?>
        </section>

        <section>
            <h2>3. Condicionales</h2>
            <?php
                if ($edad >= 18) {
                    echo "<p>$nombre es mayor de edad.</p>";
                } else {
                    echo "<p>$nombre es menor de edad.</p>";
                }

                $dia = "lunes";
                echo "<p>Día actual: $dia</p>";
                switch ($dia) {
                    case "lunes":
                        echo "<p>¡Ánimo! Es inicio de semana.</p>";
                        break;
                    case "viernes":
                        echo "<p>¡Ya casi es fin de semana!</p>";
                        break;
                    default:
                        echo "<p>Es un día normal.</p>";
                        break;
                }
            ?>
        </section>

        <section>
            <h2>4. Bucles</h2>
            <h3>For (números del 1 al 5):</h3>
            <p>
            <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo "$i ";
                }
            ?>
            </p>

            <h3>While (pares hasta 10):</h3>
            <p>
            <?php
                $j = 2;
                while ($j <= 10) {
                    echo "$j ";
                    $j += 2;
                }
            ?>
            </p>
        </section>

        <a class="boton" href="index.php">Volver al menú</a>
    </div>
</body>
</html>
