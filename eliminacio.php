<?php
$enllac = mysqli_connect("database", 'root', 'tiger', 'Digimon');

if (!$enllac) {
    echo 'Error a la conexi&oacute;n: ' . mysqli_connect_error();
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identificador = $_POST['Nombre'];
    $nombre_escapado = mysqli_real_escape_string($enllac, $identificador);
    $consulta_eliminacio = "DELETE FROM Digimon WHERE Nombre='$nombre_escapado'";
    
    if (!mysqli_query($enllac, $consulta_eliminacio)) {
        ?>
        <script>
            alert("Error en l'eliminació del Digimon!!!");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Eliminació realitzada!!");
            window.location.href = "index1.php";
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulari d'eliminació d'un Digimon</title>
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
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #FF4136;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #FF7260;
        }
        a {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: blue;
        }
        a:hover {
            color: red;
        }
    </style>
</head>
<body>
    <script>
        function confirmarEliminacion() {
            return confirm("Estàs segur que vols eliminar aquest Digimon?");
        }
    </script>

    <form method="post" onsubmit="return confirmarEliminacion()">
        <input type="hidden" name="Nombre" value="<?php echo $_GET['Nombre']; ?>">
        <button type="submit">Eliminar Digimon</button>
    </form>
    <a href="index1.php">Tornar al llistat</a>
</body>
</html>
