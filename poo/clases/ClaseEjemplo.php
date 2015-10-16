<?php

class ClaseEjemplo {

    private $variable; //variable de instancia, objeto
    private static $otraVariable; //variable estática, clase
    
    function metodo(){ //instancia
            $variableNueva=2; //variable de método, privada
            $this->variable=1;
            self::$otraVariable=2; //para acceder a la variable de clase
    }
    
    function metodo2(){ //instancia
        echo $variableNueva;
        $this->variable=2;
        $this ->privado();
        self::privadoClase();
    }
    
    static function metodo3(){ //clase
        $this->variable=1;
        self::$otraVariable=4;
        self::privadoClase();
    }
    
    private function privado(){
        
    }
    
    private static function privadoClase(){
        
    }
}
