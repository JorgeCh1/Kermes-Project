$<?php

class tbl_comunidad {
    private $id_comunidad;
    private $nombre;
    private $responsable;
    private $desc_contribucion;
    private $estado;
    
   public function getIdcomunidad(){
    return $this->id_comunidad;
   }
   public function setIdcomunidad($id_comunidad){
    $this->id_comunidad=$id_comunidad;
   }
   public function getNombre(){
    return $this->nombre;

   }

   public function setNombre($nombre){
    $this->nombre=$nombre;
   }
   public function getResponsable(){
    return $this->responsable;
   }
   public function setResponsable($responsable){
    $this->responsable=$responsable;
   }
   public function getDesc_contribucion(){
    return $this->desc_contribucion;
   }
   public function setDesc_contribucion($desc_contribucion){
    $this->desc_contribucion=$desc_contribucion;
   }
   public function getEstado(){
    return $this->estado;

   }
   public function setEstado($estado){
    $this->estado=$estado;
   }
    
}