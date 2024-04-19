<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inserció de dades</title>
    <style>
        html {
            background-color: #65FF83;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 20px auto;
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

        input[type="text"], input[type="submit"] {
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        td[colspan="2"] {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Formulari d'inserció de Digimon</h2>
    <form method="post" action="insercio.php">
        <table border="1">
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Estadio</td>
                <td><input type="text" name="stage" /></td>
            </tr>
            <tr>
                <td>Atributo</td>
                <td><input type="text" name="atribute" /></td>
            </tr>
            <tr>
                <td>Naturaleza</td>
                <td><input type="text" name="nature" /></td>
            </tr>
            <tr>
                <td>Pre-Digievolucion</td>
                <td><input type="text" name="pre" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
