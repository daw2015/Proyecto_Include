<!DOCTYPE html>
<?php
//es como el import de java
use libreria1\Util as UtilLib1; //Para darle un alias
use libreria2\Util as UtilLib2;

function autoCarga($clase){
    require 'classes' .$clase . '.php';
}
sp1_autoload_register('autoCarga');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//            $util1 = new UtilLib1();
//            $util2 = new UtilLib2();
            new Util();
            ?>
    </body>
</html>
