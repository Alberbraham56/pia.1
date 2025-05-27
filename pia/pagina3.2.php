<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Lenguajes</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="contenedor">
    <h1>Lenguajes de Programación Preferidos</h1>

    <form action="resultado.php" method="post">
        <label for="nombre">Nombre del estudiante:</label><br>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <p>Selecciona los lenguajes que prefieres:</p>
        <label><input type="checkbox" name="lenguajes[]" value="PHP"> PHP</label><br>
        <label><input type="checkbox" name="lenguajes[]" value="JavaScript"> JavaScript</label><br>
        <label><input type="checkbox" name="lenguajes[]" value="Python"> Python</label><br>
        <label><input type="checkbox" name="lenguajes[]" value="Java"> Java</label><br><br>

        <input class="boton" type="submit" value="Enviar">
    </form>

    <a class="boton" href="index.php">Volver al menú</a>
</div>
</body>
</html>
