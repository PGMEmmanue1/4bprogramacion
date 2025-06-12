<?php
ob_start();
?>
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
 
 
 
 
        <title>Emmanuel De Jesus Chavez Santander</title>
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
    
    <nav class="navbar navbar-light" style="background-color: black;">
      <div class="container">
        <a class="navbar-brand" href="index.html" style="color: white;">INICIO</a>
        
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        </div>
      </div>
     </nav>
     
     <style>
        .container{
            width:50%;
        }
        h1, h2{
            text-align: center;
            color: #ff79c6;
            margin-bottom: 15px;
        }
        form{
            
          display: flex;
          flex-direction: column;
        }
        label{

            font-size: 16px;
            margin-bottom:5px;
        }
        input[type = "text"]{
          padding:8px;
          margin-bottom:10px;
          border:none;
          border-radius:10px;
          font-size:16px;
          background-color:#44475a;
          color:fff;

        }
        input[type ="submit"]{
            padding:10px;
            margin-bottom:10px;
            border:none;
            border-radius:10px;
            font-size:16px;
            background-color:#fa7b;
            color:pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover{
            background-color:#3ae374;
        }


        </style>

    <div class="jumbotron">
      <div class="container">
      <h1>METER DATOS</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"M¿ method="post" id="formulario">
      <label for="nombre">nombre:</label>
      <input type = "text" id= "nombre" name = "nombre" required><br>
      <label for="nombredelartista">nombredelartista: </label>
      <input type="text" id="nombredelartista" name="nombredelartista" required><br>
      <label for="categoria">categoria: </label>
      <input type = "text" id="categoria" name = "categoria" required><br>
      <label for="categoria">cancionmasescuchada: </label>
      <input type = "text" id="cancionmasescuchada" name = "cancionmasescuchada" required><br>
      <label for="categoria">biografia: </label>
      <input type = "text" id="biografia" name = "biografia" required><br>
      <input type="submit" value="Agregar al registro">

      <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "musica";
        $conexion = new mysqli($servername, $username, $password, $database);
         if($conexion->connect_error){
                die("La conexion fallo " . $conexion->connect_error);
            }
            function insertarmusica($conexion) {

              if($_SERVER["REQUEST_METHOD"]=="POST"){
                

            $nombre = $conexion->real_escape_string($_POST["nombre"]);
            $nombredelartista = $conexion->real_escape_string($_POST["nombredelartista"]);
            $categoria = $conexion->real_escape_string($_POST["categoria"]);
            $cancionmasescuchada = $conexion->real_escape_string($_POST["cancionmasescuchada"]);
            $biografia = $conexion->real_escape_string($_POST["biografia"]);

        

          $sql = "INSERT INTO ado (nombre, nombredelartista, categoria, cancionmasescuchada, biografia) VALUES ('$nombre', '$nombredelartista', '$categoria', '$cancionmasescuchada', '$biografia')";
          if($conexion->query ($sql)==TRUE){
            echo "<p class='success'>Nueva cancion agregada con exito</p>";
          } else {
            echo "<p class='error'> Error al agregar otra cancion: " . $conexion ->error . "</p>";
          }
        }
      } insertarmusica($conexion);

        $sql = "SELECT * FROM ado";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<tr><th>id</th><th>nombre</th><th>nombredelartista</th><th>categoria</th><th><cancionmasescuchada</th><th>biografia</th></tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["nombredelartista"] . "</td><td>" . $row["categoria"] . "</td><td>" . $row["cancionmasescuchada"] . "</td><td>" . $row["biografia"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No se encontraron registros en la base de datos.</p>";
        }
        $conexion->close();
?>
</div>
<div class="row" style="left:20px">
            <div class="col-sm-2">
            <div class="card text-white bg-primary mb-3" style="max-width: 18ren;">
                <div class="card-header">Practica 1</div>
                <div class="card-body">
                    <h5 class="card-title">mySQL</h5>
                    <p class="card-text">Primera practica para demostrar lo aprendido en mySQL.</p>
                </div>
                </div>
               </div></body>
</html>