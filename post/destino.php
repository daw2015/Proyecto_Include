<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
         <?php
            if(isset($_POST["nombre"])){
                echo $_POST["nombre"];
            }
            echo " ";
            
            if(isset($_GET["apellido"])){
                echo $_GET["apellido"];
            }
         ?>
        </h1>
    </body>
</html>
