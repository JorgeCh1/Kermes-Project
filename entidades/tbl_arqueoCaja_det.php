<?php

class ArqueoCajaDet {
    private $idArqueoCaja_det; 
    private $idArqueoCaja;
    private $idMoneda;
    private $idDenominacion; 
    private $cantidad; 
    private $subtotal; 
 

    public function __GET($k){return $this->$k;}
    public function __SET($k, $v){return $this->$k = $v;}

}