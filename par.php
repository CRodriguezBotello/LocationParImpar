<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td class="menu">
                Numero
            </td>
            <td class="menu">
                Cuadrado
            </td>
            <th rowspan="2">
                Par
            </th>
        </tr>
        <tr>
            <td>
                <?php
                    echo $_GET["numero"];
                ?>
            </td>
            <td>
                <?php
                    echo $_GET["cuadrado"];
                ?>
            </td>
        </tr>
    </table>
</body>
</html>