<?php

class vw_catProducto {
    private $id_producto;
    private $nombre;
    
   public function getId_producto(){
    return $this->id_producto;
   }
   public function setId_producto($id_producto){
    $this->id_producto=$id_producto;
   }

   public function getNombre(){
    return $this->nombre;
   }
   public function setNombre($nombre){
    $this->nombre=$nombre;
   }
}