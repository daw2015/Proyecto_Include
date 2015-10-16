<?php
function autoCarga($clase){
    echo "<hr> ahora: $clase <hr>";
    require "clases/$clase.php";
}
spl_autoload_register('autoCarga');
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $coche = new Coche("ford", "focus", "negro", "1234aaa");
        echo $coche;
        echo Server::getRootPath();
        $p = new Persona();
        ?>
    </body>
</html>
