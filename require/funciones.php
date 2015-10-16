<?php

function tabla($filas = 10, $columnas = 10){
    $resultado = "<table border='1'>";
    /*
    $resultado = "<table border=\"1\">";
    $resultado = '<table border=\"1\">';
    $resultado = '<table border="1">';
    */
        for($i = 0; $i<=$filas; $i++){
            $resultado .="<tr>";
            for($j=0; $j<=$columnas;$j++){
                $resultado.="<td>$i*$j</td>";
            }
        }
    $resultado .="</table>";
    return $resultado;
}