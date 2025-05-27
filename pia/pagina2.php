<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Instalación de un Servidor Local</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Instalación de un Servidor Local para PHP</h1>

        <section>
            <h2>¿Qué es un servidor local?</h2>
            <p>Un servidor local simula el entorno de un servidor web en tu propia computadora. Permite ejecutar scripts PHP, manejar bases de datos y desarrollar aplicaciones web sin conexión a Internet.</p>
        </section>

        <section>
            <h2>Opciones populares</h2>
            <ul>
                <li><strong>XAMPP</strong> (Windows, Linux, macOS)</li>
                <li><strong>WampServer</strong> (Windows)</li>
                <li><strong>MAMP</strong> (macOS, Windows)</li>
                <li><strong>Laragon</strong> (Windows, más ligero y rápido)</li>
            </ul>
        </section>

        <section>
            <h2>Pasos para instalar XAMPP (recomendado)</h2>
            <ol>
                <li>Descarga XAMPP desde el sitio oficial: <a href="https://www.apachefriends.org" target="_blank">apachefriends.org</a></li>
                <li>Ejecuta el instalador y sigue las instrucciones.</li>
                <li>Selecciona los componentes básicos: Apache, MySQL, PHP y phpMyAdmin.</li>
                <li>Completa la instalación y abre el "Panel de Control de XAMPP".</li>
                <li>Inicia los servicios de <strong>Apache</strong> y <strong>MySQL</strong>.</li>
                <li>Coloca tus archivos PHP en la carpeta <code>htdocs</code> (ej: <code>C:\xampp\htdocs\</code>).</li>
                <li>Accede desde tu navegador: <code>http://localhost</code></li>
            </ol>
        </section>

        <section>
            <h2>Verifica que PHP funciona</h2>
            <p>Crea un archivo llamado <code>info.php</code> dentro de <code>htdocs</code> con este contenido:</p>
            <pre>&lt;?php phpinfo(); ?&gt;</pre>
            <p>Luego abre <code>http://localhost/info.php</code> en tu navegador. Si ves información de PHP, ¡estás listo para empezar!</p>
        </section>

        <a class="boton" href="index.php">Volver al menú</a>
    </div>
</body>
</html>
