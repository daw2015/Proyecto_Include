<?php

echo "Fecha";
if(isset($_GET["fecha"])){
    echo "El valor es: ".$_GET["fecha"];
}

echo "<br />Checkbox";

if(isset($_GET["fumador"])){
    echo "El valor es: ".$_GET["fumador"];
}

echo "<br />RadioButton";

if(isset($_GET["sexo"])){
    echo "El valor es: ".$_GET["sexo"];
}

echo "<br />Select 1";

if(isset($_GET["select1"])){
    echo "El valor es: ".$_GET["select1"];

    
}
echo "<br />Select 2";

if(isset($_GET["select2"])){
    echo "El valor es: ".$_GET["select2"];
}

echo "<br />Select 3";

if(isset($_GET["select3"])){
    echo "El valor es: ".$_GET["select3"];
}

echo "<br />Clave";

if(isset($_GET["clave"])){
    echo "El valor es: ".$_GET["clave"];
}

echo "<h1>".__LINE__."</h1>";
echo "<h1>".__FILE__."</h1>";
echo "<h1>".__DIR__."</h1>";
echo "<h1>".__FUNCTION__."</h1>";
echo "<h1>".__CLASS__."</h1>";
echo "<h1>".__METHOD__."</h1>";
