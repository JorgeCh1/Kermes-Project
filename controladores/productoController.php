<?php
require_once('../entidades/tbl_productos.php');
require_once("../datos/dt_tbl_productos.php");

class productoController{
    private $dt_producto;

    public function __construct(){
        $this->dt_producto = new Dt_tbl_productos();
    }
    public static function guardarProductos(){
        try 
        {
            $id_comunidad = $_REQUEST['id_comunidad'];
            $id_cat_producto = $_REQUEST['id_categoria'];
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $cantidad = $_REQUEST['cantidad'];
            $preciov_sugerido = $_REQUEST['preciov_sugerido'];
            
            $tp = new tbl_productos();
            $dtp = new dt_tbl_productos();
            

            $tp->setIdComunidad($id_comunidad);
            $tp->setIdCatProducto($id_cat_producto);
            $tp->setNombre($nombre);
            $tp->setDescripcion($descripcion);
            $tp->setCantidad($cantidad);
            $tp->setPreciovSugerido($preciov_sugerido);

            $dtp->guardarProductos($tp);
            
            header("Location: agregar_productos.php");
            
        } 
        catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    public function editarProductos()
    {
        try 
        {

            $id = $_REQUEST['id_producto'];
            /*
            $id_comunidad = $_REQUEST['id_comunidad'];
            $id_cat_prod = $_REQUEST['id_cat_producto'];
            */
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $cantidad = $_REQUEST['cantidad'];
            $preciov_sugerido = $_REQUEST['preciov_sugerido'];
            
            $tp = new tbl_productos();
            $dtp = new dt_tbl_productos();

            $tp->setIdProducto($id);
            $tp->setNombre($nombre);
            $tp->setDescripcion($descripcion);
            $tp->setCantidad($cantidad);
            $tp->setPreciovSugerido($preciov_sugerido);
            

            //$this->usuario->guardarUsuario($tp);
            $dtp->editarProductos($tp);
            
            
            header("Location: productos.php");
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public static function eliminarProductos()
    {
     try 
     {
         $id = $_REQUEST['id_producto'];
         
         $dtp = new dt_tbl_productos();
 
         $dtp->eliminarProductos($id);
 
         header("Location: producto.php");
     } 
     catch (Exception $e) 
     {
         die($e->getMessage());
     }
    } 
}