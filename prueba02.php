<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "hola mundo";
    echo "</br>";
    echo ("hola mundo");
    echo "</br>";
    print_r("hola mundo");
    echo "</br>";
    var_dump("hola mundo");


    echo "</br>";
    $nombre = "Pepe";
    echo "Hola <b> $nombre </b>, bienvenido a clase";
    echo "</br>";
    echo "hola" . $nombre . "gusto de verte"
    ?>
</body>

</html>

<?php include "includes/footer.php"; ?>