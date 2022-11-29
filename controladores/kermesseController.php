<?php

include_once("../entidades/tbl_kermesse.php");
include_once("../datos/dt_kermesse.php");


class kermesseController
{


    private $dt_kermesse;

    public function __construct()
    {
        $this->dt_kermesse = new dt_kermesse();
    }



    public static function guardarKermesse()
    {

        try {
            $idParroquia = $_REQUEST['idParroquia'];
            $nombre = $_REQUEST['nombre'];
            $fInicio = $_REQUEST['fInicio'];
            $fFinal = $_REQUEST['fFinal'];
            $descripcion = $_REQUEST['descripcion'];
            $estado = $_REQUEST['estado'];

            $tbk = new tbl_Kermesse();
            $dtk = new dt_kermesse();

            $tbk->setIdParroquia($idParroquia);
            $tbk->setNombre($nombre);
            $tbk->setFinicio($fInicio);
            $tbk->setFfinal($fFinal);
            $tbk->setDescripcion($descripcion);
            $tbk->setEstado($estado);

            $dtk->insertarKermesse($tbk);

            header("Location: kermesse.php");

        } catch (Exception $e) {
            die($e->getMessage());
        }


    }


    public static function editarKermesse(){
        try {
            $id_kermesse=$_REQUEST['id_kermesse'];
            $idParroquia=$_REQUEST['idParroquia'];
            $nombre=$_REQUEST['nombre'];
            $fInicio=$_REQUEST['fInicio'];
            $fFinal=$_REQUEST['fFinal'];
            $descripcion=$_REQUEST['descripcion'];


            $tbk = new tbl_Kermesse();
            $dtk = new dt_kermesse();


            $tbk->setId_kermesse($id_kermesse);
            $tbk->setIdParroquia($idParroquia);
            $tbk->setNombre($nombre);
            $tbk->setFinicio($fInicio);
            $tbk->setFfinal($fFinal);
            $tbk->setDescripcion($descripcion);


            $dtk->editarKermesse($tbk);

            header("Location: kermesse.php");


            
        }  catch (Exception $th) {
            die($th->getMessage());
        }
    }


    public static function eliminarKermesse(){
        try {
            $id_kermesse=$_REQUEST['id_kermesse'];

            $dtk= new dt_kermesse();

            $dtk->eliminarKermesse($id_kermesse);


            header("Location: kermesse.php");
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
}













?>