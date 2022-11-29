<?php
require_once('../entidades/tbl_productos.php');
require_once("../datos/dt_tbl_productos.php");

class productoController
{
    private $dt_producto;

    public function __construct()
    {
        $this->dt_producto = new dt_tbl_productos();
    }
    public static function guardarProducto()
    {
        try {



            $id_comunidad = $_REQUEST['idComunidad'];
            $id_cat_producto = $_REQUEST['idCatProducto'];
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $preciov_sugerido = $_REQUEST['preciov_sugerido'];
            $cantidad = $_REQUEST['cantidad'];
            $estado = $_REQUEST['estado'];
            $data = "'" . $id_comunidad . "'" . $nombre . "'" . $descripcion . "'" . $preciov_sugerido . "'" . $cantidad . "'" . $estado;

            $tp = new tbl_productos();
            $dtp = new dt_tbl_productos();


            $tp->setId_comunidad($id_comunidad);
            $tp->setId_cat_producto($id_cat_producto);
            $tp->setNombre($nombre);
            $tp->setDescripcion($descripcion);
            $tp->setCantidad($cantidad);
            $tp->setPreciov_sugerido($preciov_sugerido);
            $tp->setEstado($estado);



            //$this->usuario->guardarUsuario($tu);
            $dtp->guardarProducto($tp);


            header("Location: agregar_productos.php");

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public static function editarProducto()
    {
        try {
            $id_producto = $_REQUEST['id_producto'];
            $id_comunidad = $_REQUEST['id_comunidad'];
            $id_cat_producto = $_REQUEST['id _cat_producto'];
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $cantidad = $_REQUEST['cantidad'];
            $preciov_sugerido = $_REQUEST['preciov_sugerido'];
            $estado = $_REQUEST['estado'];

            $tp = new tbl_productos();
            $dtp = new dt_tbl_productos();

            $tp->setId_producto($id_producto);
            $tp->setId_comunidad($id_comunidad);
            $tp->setId_cat_producto($id_cat_producto);
            $tp->setNombre($nombre);
            $tp->setDescripcion($descripcion);
            $tp->setCantidad($cantidad);
            $tp->setPreciov_sugerido($preciov_sugerido);
            $tp->setEstado($estado);

            $dtp->editarProducto($tp);

            header("Location: agregar_productos.php");
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public static function eliminarProducto()
    {
        try {
            $id = $_REQUEST['id_producto'];

            $dtp = new dt_tbl_productos();

            $dtp->editarProducto($id);

            header("Location: productos.php");
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}