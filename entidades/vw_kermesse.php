<?php

class tbl_Vw_Kermesse
{
    private $Codigo_Kermesse;
    private $Nombre_Parroquia;
    private $Nombre;
    private $FechaInicio;
    private $FechaFinalizacion;
    private $Descripcion;
    private $Estado;
    private $NombreCreo;
    private $FechaCreacion;
    private $NombreModifico;
    private $FechaModificacion;
    private $NombreElimino;
    private $FechaEliminacion;


    public function getCodigo_kermesse()
    {
        return $this->Codigo_Kermesse;

    }
    public function setCodigo_kermesse($Codigo_Kermesse)
    {
        $this->Codigo_Kermesse = $Codigo_Kermesse;
    }
    public function getNombre_Parroquia()
    {
        return $this->Nombre_Parroquia;

    }
    public function setNombre_Parroquia($Nombre_Parroquia)
    {
        $this->Nombre_Parroquia = $Nombre_Parroquia;
    }
    public function getNombre()
    {
        return $this->Nombre;

    }
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }
    public function getFechaInicio()
    {
        return $this->FechaInicio;

    }
    public function setFechaInicio($FechaInicio)
    {
        $this->FechaInicio = $FechaInicio;
    }
    public function getFechaFinaliacion()
    {
        return $this->FechaFinalizacion;

    }
    public function setFechaFinalizacion($FechaFinalizacion)
    {
        $this->FechaFinalizacion = $FechaFinalizacion;
    }
    public function getDescripcion()
    {
        return $this->Descripcion;

    }
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }
    public function getEstado()
    {
        return $this->Estado;

    }
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }
    public function getNombreCreo()
    {
        return $this->NombreCreo;

    }
    public function setNombreCreo($NombreCreo)
    {
        $this->NombreCreo = $NombreCreo;
    }
    public function getFechaCreacio()
    {
        return $this->FechaCreacion;

    }
    public function setFechaCreacion($FechaCreacion)
    {
        $this->FechaCreacion = $FechaCreacion;
    }
    public function getNombreModificado()
    {
        return $this->NombreModifico;

    }
    public function setNombreModificado($NombreModifico)
    {
        $this->NombreModifico = $NombreModifico;
    }
    public function getFechaModificacion()
    {
        return $this->FechaModificacion;

    }
    public function setFechaModificacion($FechaModificacion)
    {
        $this->FechaModificacion = $FechaModificacion;
    }
    public function getNombreElimino()
    {
        return $this->NombreElimino;

    }
    public function setNombreElimino($NombreElimino)
    {
        $this->NombreElimino = $NombreElimino;
    }
    public function getFechaEliminacion()
    {
        return $this->FechaEliminacion;

    }
    public function setFechaEliminacion($FechaEliminacion)
    {
        $this->FechaEliminacion = $FechaEliminacion;
    }

}