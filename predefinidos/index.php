<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Valores predefinidos</h1>
        <?php
         echo "GET<br />";
         var_dump ($_GET);
         echo "<hr><br/>POST<br>";
         var_dump ($_POST);
         echo "<hr><br/>REQUEST<br>";
         var_dump ($_REQUEST);
         echo "<hr><br/>SERVER<br>";
         var_dump ($_SERVER);
         echo "<hr><br/>FILES<br>";
         var_dump ($_FILES);
         echo "<hr><br/>ENV<br>";
         var_dump ($_ENV);
         echo "<hr><br/>COOKIE<br>";
         var_dump ($_COOKIE);
         echo "<hr><br/>SESSION<br>";
         session_start();
         var_dump ($_SESSION);
        ?>
    </body>
</html>
