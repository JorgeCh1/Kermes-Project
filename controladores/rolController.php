<?php
require_once('../entidades/tbl_rol.php');
require_once("../datos/dt_tbl_rol.php");

class rolController
{
    private $dt_rol;

    public function __construct()
    {
        $this->dt_rol = new Dt_tbl_rol();
    }
    public static function guardarRol()
    {
        try {
            $rol_descripcion = $_REQUEST['rol_descripcion'];

            $tr = new tbl_rol();
            $dtr = new dt_tbl_rol();

            $tr->setRolDescripcion($rol_descripcion);
           
            $dtr->guardarRol($tr);


            header("Location: agregar_roles.php");
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function editarRol()
    {
        try 
        {
            
            $id_rol = $_REQUEST['id_rol'];
            $rol_descripcion = $_REQUEST['rol_descripcion'];
        
            $tr = new tbl_rol();
            $dtr = new dt_tbl_rol();

            $tr->setIdRol($id_rol);
            $tr->setRolDescripcion($rol_descripcion);

            $dtr->editarRol($tr);
            
            header("Location: roles.php");
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public static function eliminarRol()
    {
     try 
     {
         $id = $_REQUEST['id_rol'];
         
         $dtr = new dt_tbl_rol();
 
         $dtr->eliminarRol($id);
 
         header("Location: roles.php");
     } 
     catch (Exception $e) 
     {
         die($e->getMessage());
     }
    } 
}