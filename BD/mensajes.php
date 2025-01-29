<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <link rel="stylesheet" href="css.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="container">
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Crea conexión a la base de datos
                $conexion = new mysqli('lhuna.dev', 'upen_equipo', 'dNqyIvM2Jb3gEtlN', 'upen_equipo');

                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }

                // Obtiene los mensajes de la tabla mensajes
                $sql = "SELECT * FROM clientes";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["apellido"] . "</td>";
                        echo "<td>" . $row["correo"] . "</td>";
                        echo "<td>" . $row["telefono"] . "</td>";
                        echo "<td>" . $row["direccion"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay clientes</td></tr>";
                }

                $conexion->close();
                ?>
            </tbody>
        </table>
        <a href="/indhira/">
            <button>
                <svg class="icon" viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Regresar</button>
        </a>
    </div>
</body>

</html>