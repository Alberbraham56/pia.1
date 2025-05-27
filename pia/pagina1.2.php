<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Métodos GET y POST</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="contenedor">
    <h1>Comparación de Métodos GET y POST</h1>

    <section>
        <p>En PHP, los formularios pueden enviar datos usando los métodos <strong>GET</strong> o <strong>POST</strong>. A continuación se muestra una tabla comparativa:</p>

        <img src="dimension1.png" alt="Tabla de GET y POST" style="width:100%;max-width:600px;margin:20px 0;border:1px solid #ccc;">
        <br>
        <img src="dimension2.png" alt="Tabla de GET y POST" style="width:100%;max-width:600px;margin:20px 0;border:1px solid #ccc;">

        <h2>Ventajas y Desventajas</h2>
        <ul>
            <li><strong>GET</strong>:
                <ul>
                    <li>✔️ Visible en la URL</li>
                    <li>✔️ Se puede guardar en marcadores</li>
                    <li>❌ No seguro para datos sensibles</li>
                </ul>
            </li>
            <li><strong>POST</strong>:
                <ul>
                    <li>✔️ No visible en la URL</li>
                    <li>✔️ Acepta mayor cantidad de datos</li>
                    <li>❌ No se puede guardar en marcadores</li>
                </ul>
            </li>
        </ul>
    </section>

    <a class="boton" href="index.php">Volver al menú</a>
</div>
</body>
</html>
