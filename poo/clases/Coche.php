<?php

class Coche {
    private $marca, $modelo, $color, $matricula;
    
    function __construct($marca=null, $modelo=null, $color=null, $matricula=null) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->matricula = $matricula;
    }
    
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function toString() {
        foreach ($this as $clave => $valor) {   
                    echo "$clave : $valor";
        }
    }
    
    public function __toString() {
        $inventada="{";
        foreach ($this as $clave => $valor) {
            //$inventada = $inventada.$clave.$valor;
            $inventada .= '"'.$clave.'": "'.$valor.'",';
        }
        $inventada = substr($inventada, 0, -1); //quitamos un caracter
        $inventada .="}";
        return $inventada;
    }
    
}
