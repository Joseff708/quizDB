<?php
include 'index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];

    $sql = "INSERT INTO usuarios (nombre, email, edad ) VALUES ('$nombre', '$email', '$edad')";
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
<section>
        <form method="post">
            <fieldset>
                <legend>datos de la persona</legend>
                <div>
                    <label>ingrese el nombre de la persona</label>
                    <input type="text" name="nombre" required>
                </div>
                <br>
                <div>
                    <label>ingrese el email de la persona</label>
                    <input type="text" name="email" required>
                </div>
                <br>
                <div>
                    <label>ingrese la edad de la persona</label>
                    <input type="number" name="edad" min="0" required>
                </div>
            </fieldset>
            <button type="submit">agregar</button>
        </form>
    </section>
    <a href="index.php">regresar</a>
   
</body>
</html>