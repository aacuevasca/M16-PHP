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
    <title> Digimons (Dades Extra)</title>
    <style>
        html {
            background-color: #65FF83;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        table {
            width: 80%;
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

        th {
            background-color: #f2f2f2;
        }

        a {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Digimons (Dades Extra)</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Estadio</th>
            <th>Atributo</th>
            <th>Naturaleza</th>
            <th>Pre-Digievolucion</th>
        </tr>
        <?php
        $resultat = mysqli_query($enllac, "SELECT * FROM Digimon");
        while ($registre = mysqli_fetch_array($resultat)) {
            echo "<tr>";
            echo "<td>" . $registre['Nombre'] . "</td>";
            echo "<td>" . $registre['Estadio'] . "</td>";
            echo "<td>" . $registre['Atributo'] . "</td>";
            echo "<td>" . $registre['Naturaleza'] . "</td>";
            echo "<td>" . $registre['Pre-Digievolucion'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
    <a href="index1.php">Tornar</a>
</body>
</html>
