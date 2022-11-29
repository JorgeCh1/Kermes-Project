<?php

class Vw_KermesseGlobalCB {
    private $id_kermesse; 
    private $nombre;

    public function getId_kermesse(){
        return $this->id_kermesse;
    }
    public function setId_kermesse($id_kermesse){
        $this->id_kermesse=$id_kermesse;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }


}