<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="css/estilos.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <?php
        include "include/header.php";
        include "include/nav.html";
        include "include/aside.php";
        ?>
        <section>
            
            <div>           
                <?php 
                        require 'require/funciones.php';
                        $resultado = tabla();
                        echo $resultado;
                ?>
            </div>

        </section>
        <?php include "include/footer.html"; ?>
    </body>
</html>