<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$username = "root";
$password = "";
$servername = "localhost";
$database = "sololevelingdb"; // Cambiado a sololevelingdb
$conexion = new mysqli($servername, $username, $password, $database);
if($conexion->connect_error){
    die("La conexion fallo: " . $conexion->connect_error);
}
$sql_edad = "SELECT id, edad FROM edades";
$result_edad = $conexion->query($sql_edad);
$sql_colonias = "SELECT id, nombre_colonias FROM colonias";
$result_colonias = $conexion->query($sql_colonias);
$sql_especialidad = "SELECT id, nombre_especialidad FROM especialidades";
$result_especialidad = $conexion->query($sql_especialidad);
$sql_genero = "SELECT id, nombre_genero FROM generos";
$result_genero = $conexion->query($sql_genero);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $fecha_ing = $conexion->real_escape_string($_POST["fecha_ingreso"]);

    $sql_insert = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
                   VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";

    if($conexion->query($sql_insert) === TRUE){
        echo "<p class='success'>Nuevo alumno agregado con exito</p>";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<p class='error'>Error: " . $conexion->error . "</p>"; // Agregado el punto y coma
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>Emmanuel De Jesus Chavez Santander</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: black;"> <!-- Corregido class+= a class= -->
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color: white;">INICIO</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 1</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="./Jesus01.php">practica 1</a><br>
                            <a class="dropdown-item" href="./Jesus02.php">practica 2</a><br>
                            <a class="dropdown-item" href="Jesus03.php">practica 3</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 2</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="/bonilla01.html">practica 4</a><br>
                            <a class="dropdown-item" href="/bonilla02.html">practica 5</a><br>
                            <a class="dropdown-item" href="/bonilla03.html">practica 6</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="/bonilla01.html">practica 7</a><br>
                            <a class="dropdown-item" href="/bonilla02.html">practica 8</a><br>
                            <a class="dropdown-item" href="/bonilla03.html">practica 9</a>
                        </div>
                    </li>
                </ul>
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
        input[type="text"], input[type="email"] {
            padding:8px;
            margin-bottom:10px;
            border:none;
            border-radius:10px;
            font-size:16px;
            background-color:#44475a;
            color:#fff; /* Corregido "color:fff" a "color:#fff" */
        }
        input[type="submit"]{
            padding:10px;
            margin-bottom:10px;
            border:none;
            border-radius:10px;
            font-size:16px;
            background-color:#fa7b; /* Esto parece un color incompleto, debería ser algo como #ffa7b */
            color:pointer; /* Esto está mal, "pointer" no es un color, debería ser un valor como #fff */
            transition: background 0.3s;
        }
        input[type="submit"]:hover{
            background-color:#3ae374;
        }
    </style>
    <div class="container1" style="max-width:600px; margin:auto;">
        <form method="POST" id="formulario">
            <label for="numero_control">Numero de control: </label>
            <input type="text" id="numero_control" name="numero_control" required><br>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="apellido_paterno">Apellido Paterno: </label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>
            <label for="apellido_materno">Apellido Materno: </label>
            <input type="text" id="apellido_materno" name="apellido_materno" required><br>
            <label for="edad">Edad: </label>
            <select name="edad" required>
                <option value="">Seleccione una edad</option>
                <?php while ($row = $result_edad->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["edad"] . "</option>";
                } ?>
            </select>
            <label for="colonia">Colonia: </label>
            <select name="colonia" required>
                <option value="">Seleccione una colonia</option>
                <?php while ($row = $result_colonias->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre_colonias"] . "</option>";
                } ?>
            </select>
            <label for="especialidad">Especialidad: </label>
            <select name="especialidad" required>
                <option value="">Seleccione una especialidad</option>
                <?php while ($row = $result_especialidad->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre_especialidad"] . "</option>";
                } ?>
            </select>
            <label for="genero">Género: </label>
            <select name="genero" required>
                <option value="">Seleccione un género</option>
                <?php while ($row = $result_gener