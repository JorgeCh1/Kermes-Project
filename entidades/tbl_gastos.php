<?php


class tbl_gastos {
    private $id_registros_gastos;
    private $idKermesse;
    private $idCatGastos; 
    private $fechaGastos;
    private $concepto;
    private $monto;
    private $usuario_creacion;
    private $fecha_creacion;
    private $usuario_modificacion;
    private $fecha_modificacion;
    private $usuario_eliminacion;
    private $fecha_eliminacion;
    private $estado;

public function getId_registros_gastos(){
    return $this->id_registros_gastos;
}
public function setId_registro_gastos($id_registros_gastos){
    $this->id_registros_gastos=$id_registros_gastos;
}



public function getIdKermesse(){
    return $this->idKermesse;
}
public function setIdkermesse($idKermesse){
    $this->idKermesse=$idKermesse;
}

public function getIdCatGastos(){
    return $this->idCatGastos;
}
public function setIdCatGastos($idCatGastos){
    $this->idCatGastos=$idCatGastos;
}
public function getFechaGastos(){
    return $this->fechaGastos;
}
public function setFechaGastos($fechaGastos){
    $this->fechaGastos=$fechaGastos;
}
public function getConcepto(){
    return $this->concepto;
}
public function setConcepto($concepto){
    $this->concepto=$concepto;
}
public function getMonto(){
    return $this->monto;
}
public function setMonto($monto){
    $this->monto=$monto;
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
public function getEstado(){
    return $this->estado;
}
public function setEstado($estado){
    $this->estado=$estado;
}





}


