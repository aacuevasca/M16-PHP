<?php
$enllac = mysqli_connect("database", 'root', 'tiger', 'Digimon');

if (!$enllac) {
    echo 'Error a la conexi&oacute;n: ' . mysqli_connect_error();
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Digimon actualizado</title>
    <style>
        html {
            background-color: #65FF83;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            margin-top: 50px;
        }

        .message {
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            display: inline-block;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    $identificador = $_GET['Nombre'];
    $consulta_actualitacio = "UPDATE Digimon SET Nombre = '" . $_POST['name'] . "',
                                             Estadio = '" . $_POST['stage'] . "',
                                             Atributo = '" . $_POST['atribute'] . "',
                                             Naturaleza = '" . $_POST['nature'] . "',
                                             `Pre-Digievolucion` = '" . $_POST['pre'] . "'
                                             WHERE Nombre='$identificador'";

    if (!mysqli_query($enllac,$consulta_actualitacio)) {
        ?>
        <div class="message error">
            Error en l'actualització!!!
        </div>
        <?php
    } else {
        ?>
        <div class="message success">
            Actualització realitzada!! <a href="index1.php">Tornar al llistat</a>
        </div>
        <?php
    }
    ?>
</body>
</html>
