<?php

class tbl_productos{
    private $id_producto; 
    private $id_comunidad;
    private $id_cat_producto;
    private $nombre; 
    private $descripcion; 
    private $cantidad; 
    private $preciov_sugerido;
    private $estado;  

    public function getId_producto(){
        return $this->id_producto;
    }
    public function setId_producto($id_producto){
        $this->id_producto=$id_producto;
    }



    public function getId_comunidad(){
        return $this->id_comunidad;
    }
    public function setId_comunidad($id_comunidad){
        $this->id_comunidad=$id_comunidad;
    }

   public function getId_cat_producto(){
    return $this->id_cat_producto;
   }
   public function setId_cat_producto($id_cat_producto){
    $this->id_cat_producto=$id_cat_producto;
   }


    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }


    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion= $descripcion;
    }


    public function getCantidad(){
        return $this->cantidad;
    }
    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }


    public function getPreciov_sugerido(){
        return $this->preciov_sugerido;
    }
    public function setPreciov_sugerido($preciov_sugerido){
        $this->preciov_sugerido=$preciov_sugerido;
    }


    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
    

}