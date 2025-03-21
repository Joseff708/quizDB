<?php

$host = "localhost";
$userDB = "root";
$pwdDb = "";
$nameDb ="examen_pr2";

$conexDB = new mysqli($host, $userDB, $pwdDb, $nameDb);

if($conexDB -> connect_error){
    echo $conexDB -> connect_error;
    die();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <section>
        <table border="1">
            <caption><h1>lista de personas</h1></caption>
            <tr>
                <th>nombre</th>
                <th>email</th>
                <th>edad</th>
                <th>mayoria de edad</th>
            </tr>
            <tr>
                <td>
                    <?php
                    $sql= "select nombre from personas";
                    $resultadosSQL = $conexDB -> query($sql);
                    if($resultadosSQL -> num_rows > 0){
                        while($row= $resultadosSQL -> fetch_assoc()){
                            $nombre = $row['nombre'];
                            echo "$nombre<br>";
                        }
                    }
                    ?>
                </td>
                <td>
                <?php
                    $sql= "select email from personas";
                    $resultadosSQL = $conexDB -> query($sql);
                    if($resultadosSQL -> num_rows > 0){
                        while($row= $resultadosSQL -> fetch_assoc()){
                           
                            $email = $row ['email'];
                        
                            echo "$email <br>";
                        }
                    }
                    ?>
                </td>
                <td>
                <?php
                    $sql= "select edad from personas";
                    $resultadosSQL = $conexDB -> query($sql);
                    if($resultadosSQL -> num_rows > 0){
                        while($row= $resultadosSQL -> fetch_assoc()){
                            $edad = $row ['edad'];
                            echo "$edad <br>";
                        }
                    }
                    ?>
                </td>
                <td>
                <?php
                    $sql= "select edad from personas";
                    $resultadosSQL = $conexDB -> query($sql);
                    if($resultadosSQL -> num_rows > 0){
                        while($row= $resultadosSQL -> fetch_assoc()){
                            $edad = $row ['edad'];

                            $mayoriaEdad = $edad >=18 ? 'si es mayor de edad': 'no es mayor de edad';
                            echo "$mayoriaEdad <br>";
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
    </section>

    <a href="crear.php">agregar persona</a>
    <a href="eliminar.php">eliminar persona</a>
</body>
</html>