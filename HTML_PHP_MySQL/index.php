<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Calificaciones con MySQL</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
            text-align: left;
        }
        input[type="text"],
        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .resultado, .error {
            margin-top: 20px;
            padding: 15px;
            border-radius: 4px;
            text-align: left;
        }
        .resultado {
            background-color: #e6ffe6;
            border: 1px solid #ccffcc;
            color: #336633;
        }
        .error {
            background-color: #ffe6e6;
            border: 1px solid #ffcccc;
            color: #cc3333;
        }
        .alumnos-table {
            width: 100%;
            max-width: 800px;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden; /* Para que los bordes redondeados se apliquen a la tabla */
        }
        .alumnos-table th, .alumnos-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .alumnos-table th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .alumnos-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .alumnos-table tr:hover {
            background-color: #e9e9e9;
        }
        .message-container {
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Calificaciones</h1>

        <?php
        // Incluir el archivo de configuración de la base de datos
        require_once 'db_config.php';

        $mensaje_resultado = '';
        $mensaje_error = '';

        // Función para calcular la calificación
        function calcularNotaFinal($practica, $problemas, $teorica) {
            return ($practica * 0.10) + ($problemas * 0.50) + ($teorica * 0.40);
        }

        // Procesar el formulario cuando se envía
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = trim($_POST['nombre'] ?? '');
            $practica = filter_var($_POST['practica'] ?? '', FILTER_VALIDATE_FLOAT);
            $problemas = filter_var($_POST['problemas'] ?? '', FILTER_VALIDATE_FLOAT);
            $teorica = filter_var($_POST['teorica'] ?? '', FILTER_VALIDATE_FLOAT);

            if (empty($nombre)) {
                // Si el nombre está vacío, se entiende que el usuario quiere finalizar
                $mensaje_resultado = "Fin del ingreso de datos. Los resultados se muestran a continuación.";
            } else {
                // Validar entradas
                if ($practica === false || $problemas === false || $teorica === false ||
                    $practica < 0 || $practica > 10 ||
                    $problemas < 0 || $problemas > 10 ||
                    $teorica < 0 || $teorica > 10) {
                    $mensaje_error = "Error: Las notas deben ser números válidos entre 0 y 10.";
                } else {
                    $nota_final = calcularNotaFinal($practica, $problemas, $teorica);

                    // Preparar la inserción en la base de datos para evitar inyecciones SQL
                    $stmt = $conn->prepare("INSERT INTO alumnos (nombre, nota_practica, nota_problemas, nota_teorica, nota_final) VALUES (?, ?, ?, ?, ?)");
                    $stmt->bind_param("sdddd", $nombre, $practica, $problemas, $teorica, $nota_final);

                    if ($stmt->execute()) {
                        $mensaje_resultado = "Calificación de " . htmlspecialchars($nombre) . " calculada y guardada: " . number_format($nota_final, 2);
                    } else {
                        $mensaje_error = "Error al guardar la calificación: " . $stmt->error;
                    }
                    $stmt->close();
                }
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nombre">Nombre del Alumno:</label>
            <input type="text" id="nombre" name="nombre" value="" placeholder="Ej: Juan Pérez"><br><br>

            <label for="practica">Nota Práctica (0-10):</label>
            <input type="number" id="practica" name="practica" step="0.01" min="0" max="10" placeholder="Ej: 8.5"><br><br>

            <label for="problemas">Nota Problemas (0-10):</label>
            <input type="number" id="problemas" name="problemas" step="0.01" min="0" max="10" placeholder="Ej: 7.0"><br><br>

            <label for="teorica">Nota Teórica (0-10):</label>
            <input type="number" id="teorica" name="teorica" step="0.01" min="0" max="10" placeholder="Ej: 9.2"><br><br>

            <button type="submit">Calcular y Guardar</button>
        </form>

        <div class="message-container">
            <?php if (!empty($mensaje_error)): ?>
                <div class="error">
                    <p><?php echo $mensaje_error; ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($mensaje_resultado)): ?>
                <div class="resultado">
                    <p><?php echo $mensaje_resultado; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="container alumnos-table-container">
        <h2>Resultados Guardados</h2>
        <?php
        // Obtener todos los alumnos de la base de datos
        $sql = "SELECT id, nombre, nota_practica, nota_problemas, nota_teorica, nota_final, fecha_registro FROM alumnos ORDER BY fecha_registro DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="alumnos-table">';
            echo '<thead><tr><th>ID</th><th>Nombre</th><th>Práctica</th><th>Problemas</th><th>Teórica</th><th>Final</th><th>Fecha</th></tr></thead>';
            echo '<tbody>';
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["nombre"]) . '</td>';
                echo '<td>' . number_format($row["nota_practica"], 2) . '</td>';
                echo '<td>' . number_format($row["nota_problemas"], 2) . '</td>';
                echo '<td>' . number_format($row["nota_teorica"], 2) . '</td>';
                echo '<td><strong>' . number_format($row["nota_final"], 2) . '</strong></td>';
                echo '<td>' . $row["fecha_registro"] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No hay alumnos registrados aún.</p>';
        }

        $conn->close(); // Cerrar la conexión a la base de datos
        ?>
    </div>
</body>
</html>
