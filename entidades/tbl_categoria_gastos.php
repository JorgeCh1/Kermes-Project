<?php

class tbl_categoria_gastos {
    private $id_categoria_gastos;
    private $nombre_categoria;
    private $descripcion;
    private $estado;
    
  public function getId_categoria_gastos(){
    return $this->id_categoria_gastos;
  }

  public function setId_categoria_gastos($id_categoria_gastos){
    $this->id_categoria_gastos=$id_categoria_gastos;
  }

  public function getNombre_categoria(){
    return $this->nombre_categoria;
  }

  public function setNombre_categoria($nombre_categoria){
    $this->nombre_categoria=$nombre_categoria;
  }
  public function getDescripcion(){
    return $this->descripcion;
  }

  public function setDescripcion($descripcion){
    $this->descripcion=$descripcion;
  }
  public function getEstado(){
    return $this->estado;
  }
  public function SetEstado($estado){
    $this->estado=$estado;
  }



}