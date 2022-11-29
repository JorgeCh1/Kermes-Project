<?php

class Vw_productos
{
    private $Codigo;
    private $NombreComunidad;
    private $Categoría;
    private $Nombre;
    private $Descripcion;
    private $Cantidad;
    private $PrecioSugerido;
    private $Estado;

    public function getCodigo()
    {
        return $this->Codigo;
    }

    public function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;
    }

    public function getNombreComunidad()
    {
        return $this->NombreComunidad;
    }
    public function setNombreComunidad($NombreComunidad)
    {
        $this->NombreComunidad = $NombreComunidad;
    }
    public function getCategoria()
    {
        return $this->Categoría;
    }
    public function setCategoria($Categoría)
    {
        $this->Categoría = $Categoría;

    }

    public function getNombre()
    {
        return $this->Nombre;
    }
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }
    public function getDescripcion()
    {
        return $this->Descripcion;
    }
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }
    public function getCantidad()
    {
        return $this->Cantidad;
    }
    public function setCantidad($Cantidad)
    {
        $this->Cantidad = $Cantidad;
    }
    public function getPrecioSugerido()
    {
        return $this->PrecioSugerido;
    }
    public function setPrecioSugerido($PrecioSugerido)
    {
        $this->PrecioSugerido = $PrecioSugerido;
    }
    public function getEstado()
    {
        return $this->Estado;
    }
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }
}