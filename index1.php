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
    <title> Digimons (Actualizable)</title>
    <style>
        html {
            background-color: #65FF83;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        .table-container {
            margin: 20px auto;
            width: 80%; /* ajusta el ancho según sea necesario */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        table, th, td {
            border: 2px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td a {
            text-decoration: none;
            color: blue;
        }

        td a:hover {
            color: red;
        }

        .add-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Digimon</h1>
    <div class="table-container">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Estadio</th>
                <th>Atributo</th>
                <th>Editar</th>
                <th>Més</th>
            </tr>
            <?php
            $resultat = mysqli_query($enllac, "SELECT * FROM Digimon");
            while ($registre = mysqli_fetch_array($resultat)) {
                echo "<tr>";
                echo "<td>" . $registre['Nombre'] . "</td>";
                echo "<td>" . $registre['Estadio'] . "</td>";
                echo "<td>" . $registre['Atributo'] . "</td>";

                $linkactualitzacio = "formulariactualitzacio.php?Nombre=" . $registre['Nombre'];
                $linkeliminacio = "eliminacio.php?Nombre=" . $registre['Nombre'];
                $linkmes = "dadesextra.php?Nombre" . $registre['Nombre'];
                echo "<td><a href=\"$linkactualitzacio\">Actualizar</a> / <a href=\"$linkeliminacio\">Eliminar</a></td>";
                echo "<td><a href=\"$linkmes\">Dades Extra</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <a class="add-link" href="formulari.php">Afegir</a>
</body>
</html>
