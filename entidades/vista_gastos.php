<?php

class vista_gastos
{


    private $Codigo;
    private $Kermesse;
    private $Categoría;
    private $Fecha;
    private $Concepto;
    private $Monto;
    private $Estado;


    public function __GET($k){return $this->$k;}
    public function __SET($k, $v){return $this->$k = $v;}
}








?>