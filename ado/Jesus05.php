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
        input[type = "text"], input[type="email"] {
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
      <div class="container1" style=" max-width:600px; margin:auto;">
        <form method="POST" id="formulario">
            <label for="numero_control">Numero de control: </label>
            <input type="text" id="numero_control" name="numero_control" required></br>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required></br>
            <label for="apellido_paterno">Apellido Paterno: </label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required></br>
            <label for="apellido_materno">Apellido Materno: </label>
            <input type="text" id="apellido_materno" name="apellido_materno" required></br>
            <label for="edad">Edad: </label>
            <input type="text" id="edad" name="edad" required></br>
            <label for="colonia">Colonia: </label>
            <input type="text" id="colonia" name="colonia" required></br>
            <label for="especialidad">Especialidad: </label>
            <input type="text" id="especialidad" name="especialidad" required></br>
            <label for="genero">Genero: </label>
            <input type="text" id="genero" name="genero" required></br>
            <label for="correo">Correo: </label>
            <input type="email" id="correo" name="correo" required></br>
            <label for="telefono">Telefono: </label>
            <input type="text" id="telefono" name="telefono" required></br>
            <label for="fecha_ingreso">Fecha de Ingreso: </label>
            <input type="text" id="fecha_ingreso" name="fecha_ingreso" required></br>
        <input type="submit" value="Agregar alumno">
        </form>
    </div>

      <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            $username = "root";
            $password = "";
            $servername = "localhost";
            $database = "cetis131";
                $conexion = new mysqli($servername, $username, $password, $database);
                if($conexion->connect_error){
                        die("La conexion fallo " . $conexion->connect_error);
                    }

            function insertarAlumno($conexion){}
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    var_dump($_POST);
                    $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
                    $nombre = $conexion->real_escape_string($_POST["nombre"]);
                    $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
                    $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
                    $edad = $conexion->real_escape_string($_POST["edad"]);
                    $colonia = $conexion->real_escape_string($_POST["colonia"]);
                    $especialidad = $conexion->real_escape_string($_POST["especialidad"]);
                    $genero = $conexion->real_escape_string($_POST["genero"]);
                    $correo = $conexion->real_escape_string($_POST["correo"]);
                    $telefono = $conexion->real_escape_string($_POST["telefono"]);
                    $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);


                  
                    
                      $sql = "INSERT INTO Alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, 
                      colonia, especialidad, genero, correo, telefono, fecha_ingreso) VALUES 
                      ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', 
                      '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";
                  
                      if ($conexion->query($sql) === TRUE) {
                          echo "<p class='success'>Nuevo alumno agregado con exito.</p>";
                          header("Location: " . $_SERVER['PHP_SELF']);
                          exit();
                      } else {
                          echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
                      }
                  }
                  
                  insertarAlumno($conexion);

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