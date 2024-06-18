<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $db = mysqli_connect('localhost', 'root', 'root', 'clinica_prueba');

    
    if (!$db) {
        echo "Error: No se pudo conectar a MySQL.";
        echo "errno de depuración: " . mysqli_connect_errno();
        echo "error de depuración: " . mysqli_connect_error();
        exit;
    }

    
    $nombre_paciente = $_POST['nombre_paciente'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $estudios = $_POST['estudios'];
    $medico = $_POST['medico'];

    // consulta
    $query = "INSERT INTO gabinete (nombre_paciente, fecha_nacimiento, edad, telefono, estudios, medico) 
              VALUES ('$nombre_paciente', '$fecha_nacimiento', '$edad', '$telefono', '$estudios', '$medico')";

    // Ejecutar la consulta
    if (mysqli_query($db, $query)) {
        echo "Los datos se han insertado correctamente.";
    } else {
        echo "Error al insertar los datos: " . mysqli_error($db);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($db);
}
?>
