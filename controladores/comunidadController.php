<?php


require_once '../entidades/tbl_comunidad.php';
require_once '../datos/dt_tbl_comunidad.php';

class comunidadController
{

    private $dt_comunidad;


    public function __construct()
    {
        $this->dt_comunidad = new dt_tbl_comunidad();
    }


    public  static function guardarComunidad()
    {
        try {
            $nombre = $_REQUEST['nombre'];
            $responsable = $_REQUEST['responsable'];
            $desc_contribucion = $_REQUEST['desc_contribucion'];
            $estado = $_REQUEST['estado'];

            $tc = new tbl_comunidad();
            $dtc = new dt_tbl_comunidad();

            $tc->setNombre($nombre);
            $tc->setResponsable($responsable);
            $tc->setDesc_contribucion($desc_contribucion);
            $tc->setEstado($estado);

            $dtc->guardarComunidad($tc);

            header("Loation: agregar_comunidad.php");


        } catch (Exception $e) {

            die($e->getMessage());
        }

    }


    public static function EditarComunidad()
    {

        try {
            $nombre = $_REQUEST['nombre'];
            $responsable = $_REQUEST['responsable'];
            $desc_contribucion = $_REQUEST['desc_contribucion'];
            $estado = $_REQUEST['estado'];


            $tc = new tbl_comunidad();
            $dtc = new dt_tbl_comunidad();

            $tc->setNombre($nombre);
            $tc->setResponsable($responsable);
            $tc->setDesc_contribucion($desc_contribucion);
            $tc->setEstado($estado);

            $dtc->editarComunidad($tc);

            header("Location: agregar_comunidad.php");


        } catch (Exception $e) {

            die($e->getMessage());
        }

    }


    public static function eliminarComunidad()
    {

        try {
            $id_comunidad = $_REQUEST['id_comunidad'];

            $dtc = new dt_tbl_comunidad();

            $dtc->editarComunidad($id_comunidad);

            header("Location: comunidad.php");

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }





}


?>