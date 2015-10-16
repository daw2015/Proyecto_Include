<?php


class persona { //si no lleva static son de instancia
    private $nombre, $apellidos, $fechaNacimiento, $sexo;
    private static $planeta="Tierra";
    
    function __construct($nombre=null, $apellidos=null, $fechaNacimiento=null, $sexo=null) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->sexo = $sexo;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public static function getPlaneta() {
        return self::$planeta;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public static function setPlaneta($planeta) {
        self::$planeta = $planeta;
    }

    public function __toString() {
        return $this->nombre . " " . 
               $this->apellidos . " " . 
               $this->fechaNacimiento . ", es del planeta " . 
               $this->sexo . " " .
               self::$planeta; 
    }
    
    public function getTodosLosValores(){
        foreach ($this as $indice => $valor) {
            echo "<br>$indice: $valor<br/>";  
        }
    }
    
    public function getJson(){
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
