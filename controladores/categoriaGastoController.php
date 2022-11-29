<?php

require_once '../entidades/tbl_gastos.php';
require_once '../datos/dt_tbl_categoriaGastos.php';


class categoriaGastoController
{

    private $dt_catGasto;


    public function __construct()
    {
        $this->dt_catGasto = new dt_tbl_gastos();

    }


    public static function guardarCategoriaGasto()
    {
        try {
            $nombre = $_REQUEST['nombre_categoria'];
            $descripcion = $_REQUEST['descripcion'];

            $tbc = new tbl_categoria_gastos();
            $dtc = new dt_tbl_categoriaGastos();

            $tbc->setNombre_categoria($nombre);
            $tbc->setDescripcion($descripcion);

            $dtc->insertarCategoriaGastos($tbc);

            header("categoria_gastos.php");

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public static function editarCategoriaGasto()
    {
        try {
            $id_categoria_gastos = $_REQUEST['id_categoria_gastos'];
            $nombre_categoria = $_REQUEST['nombre_categoria'];
            $descripcion = $_REQUEST['descripcion'];


            $tbc = new tbl_categoria_gastos();
            $dtc = new dt_tbl_categoriaGastos();


            $tbc->setId_categoria_gastos($id_categoria_gastos);
            $tbc->setNombre_categoria($nombre_categoria);
            $tbc->setDescripcion($descripcion);

            $dtc->editarCategoriaGastos($tbc);

            header("Location:  categoria_gastos.php");



        } catch (Exception $th) {
            die($th->getMessage());
        }
    }


    public static function eliminarCategoriaGasto($id_categoria_gastos)
    {
        try {
            $id_categoria_gastos = $_REQUEST['id_categoria_gastos'];
            $dtc = new dt_tbl_categoriaGastos();

            $dtc->eliminarCategoriaGastos($id_categoria_gastos);
            header("Location:  gastos.php");


        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
}






?>