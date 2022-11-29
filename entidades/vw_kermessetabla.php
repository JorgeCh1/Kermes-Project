<?php

class vw_kermessetabla
{


    private $Codigo_Kermesse;
    private $Nombre_Parroquia;
    private $Nombre;
    private $FechaInicio;
    private $FechaFinalizacion;
    private $Descripcion;
    private $NombreCreo;
    private $FechaCreacion;
    private $NombreModifico;
    private $FechaModificacion;
    private $NombreElimino;
    private $FechaEliminacion;
    private $Estado;


    public function getCodigo_Kermesse(){
        return $this->Codigo_Kermesse;
    }
    public function setCodigo_Kermesse($Codigo_Kermesse){
         $this->Codigo_Kermesse=$Codigo_Kermesse;
    }
    public function getNombre_Parroquia(){
        return $this->Nombre_Parroquia;
    }
    public function setNombre_Parroquia($Nombre_Parroquia){
         $this->Nombre_Parroquia=$Nombre_Parroquia;
    }
    public function getNombre(){
        return $this->Nombre;
    }
    public function setNombre($Nombre){
         $this->Nombre=$Nombre;
    }
    public function getFechaInicio(){
        return $this->FechaInicio;
    }
    public function setFechaInicio($FechaInicio){
         $this->FechaInicio=$FechaInicio;
    }
    public function getFechaFinalizacion(){
        return $this->FechaFinalizacion;
    }
    public function setFechaFinalizacion($FechaFinalizacion){
         $this->FechaFinalizacion=$FechaFinalizacion;
    }
    public function getDescripcion(){
        return $this->Descripcion;
    }
    public function setDescripcion($Descripcion){
         $this->Descripcion=$Descripcion;
    }
    public function getNombreCreo(){
        return $this->NombreCreo;
    }
    public function setNombreCreo($NombreCreo){
         $this->NombreCreo=$NombreCreo;
    }
    public function getFechaCreacion(){
        return $this->FechaCreacion;
    }
    public function setFechaCreacion($FechaCreacion){
         $this->FechaCreacion=$FechaCreacion;
    }
    public function getNombreModifico(){
        return $this->NombreModifico;
    }
    public function setNombreModifico($NombreModifico){
         $this->NombreModifico=$NombreModifico;
    }
    public function getFechaModificacion(){
        return $this->FechaModificacion;
    }
    public function setFechaModificacion($FechaModificacion){
         $this->FechaModificacion=$FechaModificacion;
    }
    public function getNombreElimino(){
        return $this->NombreElimino;
    }
    public function setNombreElimino($NombreElimino){
         $this->NombreElimino=$NombreElimino;
    }
    public function getFechaEliminacion(){
        return $this->FechaEliminacion;
    }
    public function setFechaEliminacion($FechaEliminacion){
         $this->FechaEliminacion=$FechaEliminacion;
    }
    public function getEstado(){
        return $this->Estado;
    }
    public function setEstado($Estado){
         $this->Estado=$Estado;
    }







}

?>