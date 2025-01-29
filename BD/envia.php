<?php 

    // Crea conexión a la base de datos

    $conexion = new mysqli('lhuna.dev', 'upen_equipo', 'dNqyIvM2Jb3gEtlN', 'upen_equipo');

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtiene los datos del formulario, nombre, correo, telefono, mensaje

    $nombre = $_POST['nombre'];
    $apellido = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    // Inserta los datos la tabla mensajes

    $sql = "INSERT INTO clientes (nombre, apellido, correo, telefono, direccion) VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$direccion')";

    if ($conexion->query($sql) === TRUE) {
        // redirige a enviado.php
        header("Location: enviado.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();