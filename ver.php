<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
        echo $Nombre = $_POST["Nombre"];
        echo "<br>";
        echo $Apellido = $_POST["Apellido"];
        echo "<br>";
        echo $Edad = $_POST["Edad"];
        echo "<br>";
        echo $Color = $_POST["Color"];
    ?>
    </p>
</body>
</html>
