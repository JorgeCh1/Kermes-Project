<?php

class tbl_Kermesse {
    private $id_kermesse; 
    private $idParroquia;
    private $nombre;
    private $fInicio; 
    private $fFinal; 
    private $descripcion; 
    private $estado; 
    private $usuario_creacion; 
    private $fecha_creacion;
    private $usuario_modificacion; 
    private $fecha_modificacion; 
    private $usuario_eliminacion;
    private $fecha_eliminacion; 

    public function getId_kermesse(){
        return $this->id_kermesse;
    }
    public function setId_kermesse($id_kermesse){
        $this->id_kermesse=$id_kermesse;
    }
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
    public function getFinicio(){
        return $this->fInicio;
    }
    public function setFinicio($fInicio){
        $this->fInicio=$fInicio;
    }
    public function getFfinal(){
        return $this->fFinal;
    }
    public function setFfinal($fFinal){
        $this->fFinal=$fFinal;
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
    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function getUsuario_creacion(){
        return $this->usuario_creacion;
    }
    public function setUsuario_creacion($usuario_creacion){
        $this->usuario_creacion=$usuario_creacion;
    }
    public function getFecha_creacion(){
        return $this->fecha_creacion;
    }
    public function setFecha_creacion($fecha_creacion){
        $this->fecha_creacion=$fecha_creacion;
    }
    public function getUsuario_modificacion(){
        return $this->usuario_modificacion;
    }
    public function setUsuario_modificacion($usuario_modificacion){
        $this->usuario_modificacion=$usuario_modificacion;
    }
    public function getFecha_modificacion(){
        return $this->fecha_modificacion;
    }
    public function setFecha_modificacion($fecha_modificacion){
        $this->fecha_modificacion=$fecha_modificacion;
    }
    public function getUsuario_eliminacion(){
        return $this->usuario_eliminacion;
    }
    public function setUsuario_eliminacion($usuario_eliminacion){
        $this->usuario_eliminacion=$usuario_eliminacion;
    }
    public function getFecha_eliminacion(){
        return $this->fecha_eliminacion;
    }
    public function setFecha_eliminacion($fecha_eliminacion){
        $this->fecha_eliminacion=$fecha_eliminacion;
    }
    

}