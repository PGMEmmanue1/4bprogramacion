<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Emmanuel De Jesus Chavez Santander</title>
  <style>
  .table-container {
  margin: 20px auto;
  width: 95%;
  overflow-x: auto;
  font-family: 'Roboto', sans-serif;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  background-color: #0e2436;
  box-shadow: 0 4px 8px rgba(59, 163, 255, 0.5);
  color: #ffffff;
  border-radius: 8px;
  overflow: hidden;
}

th, td {
  padding: 12px 15px;
  text-align: left;
  border: 1px solid #143552;
}

th {
  background-color: #00509e;
  font-weight: bold;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 1px;
}

tr:nth-child(even) {
  background-color: #132c40;
}

tr:hover {
  background-color: #1d3c55;
  transition: background-color 0.3s ease;
}

.jumbotron {
  padding: 2rem;
  margin-bottom: 2rem;
  background-color: #0e2436;
  color: #ffffff;
  border-left: 5px solid #3ba3ff;
  position: relative;
  overflow: hidden;
}

.jumbotron::after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 30%;
  height: 100%;
  background: linear-gradient(135deg, transparent 50%, rgba(59, 163, 255, 0.2) 100%);
  z-index: 1;
}

.display-4 {
  margin-bottom: 30px;
  font-weight: 700;
  color: #ffffff;
  text-shadow: 2px 2px 4px rgba(59, 163, 255, 0.4);
}

.warning-message {
  color: #ffffff;
  background-color: #00509e;
  border: 1px solid #3ba3ff;
  padding: 15px;
  margin: 15px 0;
  border-radius: 4px;
  font-weight: bold;
  position: relative;
  padding-left: 20px;
}

.warning-message::before {
  content: "!";
  position: absolute;
  left: 8px;
  top: 50%;
  transform: translateY(-50%);
  font-weight: bold;
  font-size: 16px;
}
  </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: black;">
      <div class="container">
        <a class="navbar-brand" href="index.html" style="color: white;">INICIO</a>

      <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 1</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
              <a class="dropdown-item" href="/Jesus01.php">practica 1</a><br>
              <a class="dropdown-item" href="/Jesus02.php">practica 2</a><br>
              <a class="dropdown-item" href="/Jesus03.php">practica 3</a>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 2</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
              <a class="dropdown-item" href="/Jesus04.php">practica 4</a><br>
              <a class="dropdown-item" href="/Jesus05.php">practica 5</a><br>
              <a class="dropdown-item" href="/Jesus06.html">practica 6</a>
          </li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 3</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
              <a class="dropdown-item" href="/Jesus07.html">practica 7</a><br>
              <a class="dropdown-item" href="/Jesus08.html">practica 8</a><br>
              <a class="dropdown-item" href="/Jesus09.html">practica 9</a>
            </li>
            </ul>
          </div>
      </div>
      </div>
    </nav>
    <div class="jumbotron">
      <h1 class="display-4" style="text-align: center; color: #ffffff; font-family: 'Orbitron', sans-serif; text-transform: uppercase; letter-spacing: 3px; font-weight: 800; text-shadow: 0 0 5px #3ba3ff, 0 0 10px rgba(59, 163, 255, 0.5);">PAGINA DE MOSTRAR DATOS</h1>
    <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "musica";
            $conexion = new mysqli($servername, $username, $password, $database);
              if($conexion->connect_error){
                      die("La conexion fallo: " . $conexion->connect_error);
                 }
                 $sql = "SELECT * FROM ado";
                 $resultado = $conexion->query($sql);
?>
        <div class="container">
          <h1>Datos de la tabla de musica</h1>

          <?php if ($resultado->num_rows >0):?>
              <div class="table-container">
                <table>
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Nombre del artista</th>
                      <th>Categoria</th>
                      <th>Cancion mas escuchada</th>
                      <th>Biografia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($fila = $resultado->fetch_assoc()):  ?>
                    <tr>
                      <td><?php echo $fila['id']; ?></td>
                      <td><?php echo $fila['nombre']; ?></td>
                      <td><?php echo $fila['nombredelartista']; ?></td>
                      <td><?php echo $fila['categoria']; ?></td>
                      <td><?php echo $fila['cancionmasescuchada']; ?></td>
                      <td><?php echo $fila['biografia']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
          <?php else: ?>
            <p class="warning-message">No se encontraron las canciones</p>
          <?php endif; ?>
          </div>
    </div>
</body>
</html>