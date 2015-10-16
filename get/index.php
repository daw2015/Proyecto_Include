<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            if(isset($_GET["a"])){ /*Si está establecido el valor...*/
                $valor2 = $_GET["a"];
                echo "<h1>$valor</h1>";
            }else{
                
            }
            if(isset($_GET["b"])){
                $valor2 = $_GET["b"];
                echo "<h1>$valor2</h1>";
            }else{
                
            }
            var_dump($_GET);
        ?>
    </body>
</html>
