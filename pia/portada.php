<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Portada</title>
<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #6b73ff 0%, #000dff 100%);
    color: white;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .container {
    max-width: 900px;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    padding: 40px;
    display: flex;
    align-items: center;
    gap: 50px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.3);
  }
  .content {
    flex: 1;
  }
  h1 {
    font-size: 3rem;
    margin-bottom: 0.3em;
  }
  p {
    font-size: 1.3rem;
    margin-bottom: 1.5em;
  }
  button {
    padding: 15px 30px;
    font-size: 1.1rem;
    border: none;
    border-radius: 30px;
    background: #ff7e5f;
    color: white;
    cursor: pointer;
    transition: background 0.3s ease;
  }
  button:hover {
    background: #eb6750;
  }
  .image {
    flex: 1;
    text-align: center;
  }
  .image img {
    max-width: 100%;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
  }
  @media (max-width: 768px) {
    body {
      padding: 20px;
    }
    .container {
      flex-direction: column;
      gap: 30px;
    }
    h1 {
      font-size: 2.2rem;
    }
    p {
      font-size: 1rem;
    }
  }
</style>
</head>
<body>
  <div class="container">
    <div class="content">
      <h1>Bienvenido a Mi Proyecto PHP</h1>
      <p>somos los tilinos, el equipo esta comformado por alberto, naosami, rodolfo y jose, nuestro equipo </p>
      <button onclick="alert('me hackeron!')">Comenzar</button>
    </div>
    <div class="image">
      <img src="hacker.png" alt="Código PHP">
    </div>
  </div>
</body>
</html>
