<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require "./clases/Coche.php";
         $coche = new Coche("vw", "polo", "verde","1234BBC");
         echo $coche;
        ?>
    </body>
</html>
