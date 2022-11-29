<?php

require_once '../datos/dt_tbl_categoriaProducto.php';
require_once '../entidades/tbl_categoria_productos.php';

class categoriaProductoController
{

    private $dc_catproducto;


    public function __construct()
    {

        $this->dc_catproducto = new dt_tbl_categoriaProducto();
    }

    public static function guardarCategoriaProducto()
    {

        try {
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $estado = $_REQUEST['estado'];

            $tcp = new tbl_categoria_producto();
            $dtp = new dt_tbl_categoriaProducto();


            $tcp->setNombre($nombre);
            $tcp->setDescripcion($descripcion);
            $tcp->setEstado($estado);



            $dtp->guardarCategoriaProducto($tcp);

            header("Location: agregar_categoriaProd.php");
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }


    public static function editarCategoriaProducto()
    {

        try {
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $estado = $_REQUEST['estado'];

            $tbp = new tbl_categoria_producto();
            $dtp = new dt_tbl_categoriaProducto();

            $tbp->setNombre($nombre);
            $tbp->setDescripcion($descripcion);
            $tbp->setEstado($estado);

            $dtp->editarCategoriaProducto($tbp);

            header("Location: agregar_categoriaProd.php");
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function eliminarCatProducto($id_cat_prod)
    {

        try {
            $id = $_REQUEST['id_categoria_producto'];

            $dtp = new dt_tbl_categoriaProducto();

            $dtp->editarCategoriaProducto($id);

            header("Location:categoria_productos.php");
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
}