<?php

class tbl_vw_kermesseUsuario {
    private $id_usuario;
    private $nombre; 

   public function getId_usuario(){
    return $this->id_usuario;
   }
   public function setId_usuario($id_usuario){
    $this->id_usuario=$id_usuario;
   }

   public function getNombre(){
    return $this->nombre;
   }
   public function setNombre($nombre){
    $this->nombre=$nombre;
   }

}