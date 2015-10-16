<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php       
            require './clases/Persona.php';
            require './clases/Server.php';
            $persona = new Persona();
            $persona2 = new persona("Pepe", "Perez");
            $persona3 = new persona("Juan", "Lopez", null, "Autentico");
            $persona->setNombre("Juanita");
            $persona->setApellidos("Gomez");
            echo $persona . " " . $persona2 . " " . $persona3;
            
            $persona3->getTodosLosValores();
           echo $persona3->getJson();
//            echo Server::getRequestDate("Y");
            Persona::setPlaneta("Marte");    
            
        ?>
    </body>
</html>
/