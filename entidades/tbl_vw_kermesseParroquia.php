<?php

class tbl_vw_KermesseParroquia {
    private $idParroquia;
    private $nombre;

  public function getIdParroquia(){
    return $this->idParroquia;
  }
  public function setIdParroquia($idParroquia){
    $this->idParroquia=$idParroquia;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre=$nombre;
  }


}