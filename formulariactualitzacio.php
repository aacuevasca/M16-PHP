<?php
$enllac = mysqli_connect("database", 'root', 'tiger', 'Digimon');

if (!$enllac) {
    echo 'Error a la conexión: ' . mysqli_connect_error();
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de actualización de un registro</title>
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

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        td input[type="text"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Formulario de actualización de un registro</h2>
    <?php
    $identificador = $_GET['Nombre'];
    $resultat = mysqli_query($enllac, "SELECT * FROM Digimon WHERE Nombre='$identificador'");
    $registre = mysqli_fetch_array($resultat);
    ?>
    <form method="post" action="actualitzacio.php?Nombre=<?php echo $identificador ?>">
        <table border="1">
            <tr>
                <td colspan="2">Formulario de actualización</td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="name" value="<?php echo $registre['Nombre']; ?>" /></td>
            </tr>
            <tr>
                <td>Estadio</td>
                <td><input type="text" name="stage" value="<?php echo $registre['Estadio']; ?>" /></td>
            </tr>
            <tr>
                <td>Atributo</td>
                <td><input type="text" name="atribute" value="<?php echo $registre['Atributo']; ?>" /></td>
            </tr>
            <tr>
                <td>Naturaleza</td>
                <td><input type="text" name="nature" value="<?php echo $registre['Naturaleza']; ?>" /></td>
            </tr>
            <tr>
                <td>Pre-Digievolucion</td>
                <td><input type="text" name="pre" value="<?php echo $registre['Pre-Digievolucion']; ?>" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Actualizar" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
