<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portada del Proyecto</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #2b5876, #4e4376);
      color: #fff;
    }

    h1 {
      text-align: center;
      margin-top: 40px;
      font-size: 2rem;
      color: #ffffff;
    }

    .seccion {
      background-color: rgba(255, 255, 255, 0.05);
      margin: 30px auto;
      padding: 30px;
      border-radius: 15px;
      width: 90%;
      max-width: 600px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .boton {
      display: block;
      width: 80%;
      margin: 10px auto;
      padding: 15px;
      font-size: 16px;
      background-color: #00bcd4;
      border: none;
      border-radius: 8px;
      color: white;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .boton:hover {
      background-color: #0097a7;
      transform: scale(1.05);
    }

    .titulo-etapa {
      font-size: 1.5rem;
      margin-bottom: 20px;
      border-bottom: 2px solid #ffffff66;
      padding-bottom: 10px;
    }
  </style>
</head>
<body>

  <h1>Portada del Proyecto PHP</h1>

  <div class="seccion">
    <div class="titulo-etapa">Portada</div>
    <form action="portada.php" method="get">
      <button type="submit" class="boton">Dale clic manito</button>
    </form>
  </div>

  <div class="seccion">
    <div class="titulo-etapa">Etapa 1</div>
    <form action="pagina1.php" method="get"><button class="boton">Ir a Página 1</button></form>
    <form action="pagina2.php" method="get"><button class="boton">Ir a Página 2</button></form>
    <form action="pagina3.php" method="get"><button class="boton">Ir a Página 3</button></form>
  </div>

  <div class="seccion">
    <div class="titulo-etapa">Etapa 2</div>
    <form action="pagina1.1.php" method="get"><button class="boton">Ir a Página 1</button></form>
    <form action="pagina2.1.php" method="get"><button class="boton">Ir a Página 2</button></form>
    <form action="pagina3.1.php" method="get"><button class="boton">Ir a Página 3</button></form>
  </div>

  <div class="seccion">
    <div class="titulo-etapa">Etapa 3</div>
    <form action="pagina3.1.php" method="get"><button class="boton">Ir a Página 1</button></form>
    <form action="pagina3.2.php" method="get"><button class="boton">Ir a Página 2</button></form>
    <form action="resultado.php" method="get"><button class="boton">Ir a Página 3</button></form>
  </div>

  <div class="seccion">
    <div class="titulo-etapa">Etapa 4</div>
    <form action="pagina4.1.php" method="get"><button class="boton">Ir a Página 1</button></form>
    <form action="pagina4.2.php" method="get"><button class="boton">Ir a Página 2</button></form>
    <form action="pagina4.3.php" method="get"><button class="boton">Ir a Página 3</button></form>
  </div>

</body>
</html>
