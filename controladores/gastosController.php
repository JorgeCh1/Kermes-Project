<?php

require_once '../entidades/tbl_gastos.php';
require_once '../datos/dt_tbl_gastos.php';


class gastoController
{

    private $dt_gastos;



    public function __construct()
    {
        $this->dt_gastos = new dt_tbl_gastos();
    }


    public static function guardarGastos()
    {
        try {
            $idKermesse = $_REQUEST['idKermesse'];
            $idCatGastos = $_REQUEST['idCatGastos'];
            $fechaGasto = $_REQUEST['fechaGasto'];
            $concepto = $_REQUEST['concepto'];
            $monto = $_REQUEST['monto'];



            $tbg = new tbl_gastos();
            $dtg = new dt_tbl_gastos();

            $tbg->setIdkermesse($idKermesse);
            $tbg->setIdCatGastos($idCatGastos);
            $tbg->setFechaGastos($fechaGasto);
            $tbg->setConcepto($concepto);
            $tbg->setMonto($monto);

            $dtg->reGastos($tbg);

            header("Location:agregar_gastos.php");



        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function editarGastos()
    {

        try {
            $id_registro_gastos = $_REQUEST['id_registro_gastos'];
            $idKermesse = $_REQUEST['idKermesse'];
            $idCatGastos = $_REQUEST['idCatGastos'];
            $fechaGasto = $_REQUEST['fechaGasto'];
            $concepto = $_REQUEST['concepto'];
            $monto = $_REQUEST['monto'];


            $tbg = new tbl_gastos();
            $dtg = new dt_tbl_gastos();

            $tbg->setId_registro_gastos($id_registro_gastos);
            $tbg->setIdkermesse($idKermesse);
            $tbg->setIdCatGastos($idCatGastos);
            $tbg->setFechaGastos($fechaGasto);
            $tbg->setConcepto($concepto);
            $tbg->setMonto($monto);

            header("Location: agregar_gastos.php");
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public static function eliminarGastos()
    {

        try {
            $id_registro_gastos = $_REQUEST['id_registro_gastos'];
            $dtg = new dt_tbl_gastos();

            $dtg->eliminarGasto($id_registro_gastos);

            header("Location: gastos.php");
        } catch (Exception $th) {
            die($th->getMessage());
        }


    }
}







?>