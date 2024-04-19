<?php
$enllac = mysqli_connect("database", 'root', 'tiger', 'Digimon');

if (!$enllac) {
    echo 'Error a la conexión: ' . mysqli_connect_error();
    exit;
}

$nom = $_POST['name'];
$stage = $_POST['stage'];
$atribute = $_POST['atribute'];
$nature = $_POST['nature'];
$evolution = $_POST['pre'];

$insercio_sql = "INSERT INTO Digimon VALUES ('$nom', '$stage', '$atribute', '$nature', '$evolution')";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado inserción de datos</title>
    <style>
        html {
            background-color: #65FF83;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h2 {
            margin-top: 50px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 20px;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $resultat = mysqli_query($enllac, $insercio_sql);
    if (!$resultat) {
        ?>
        <div class="message error">
            Inserción de datos INCORRECTAMENTE realizada
        </div>
        <?php
    } else {
        ?>
        <div class="message success">
            Inserción de datos CORRECTAMENTE realizada
        </div>
        <?php
    }
    ?>
    <br>
    <button onclick="window.location.href='index1.php'">Tornar</button>
</body>
</html>
