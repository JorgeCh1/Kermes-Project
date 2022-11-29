<?php
include_once("conexion.php");

class dt_kermesse extends Conexion
{




    public function listarKermesse()
    {
        try {

            $result = array();
            $querySQL = "SELECT * FROM dbkermesse.vw_kermessetabla  WHERE Estado <> 3";

            $stm = $this->conectar()->prepare($querySQL);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $k = new tbl_Vw_Kermesse();

                $k->setCodigo_kermesse($r->Codigo_Kermesse);
                $k->setNombre_Parroquia($r->Nombre_Parroquia);
                $k->setNombre($r->Nombre);
                $k->setFechaInicio($r->FechaInicio);
                $k->setFechaFinalizacion($r->FechaFinalizacion);
                $k->setDescripcion($r->descripcion);
                $k->setEstado($r->estado);
                //$k->__SET('NombreCreo', $r->NombreCreo);
                //$k->__SET('FechaCreacion', $r->FechaCreacion);
                //$k->__SET('NombreModifico', $r->NombreModifico);
                //$k->__SET('FechaModificacion', $r->FechaModificacion);
                //$k->__SET('NombreElimino', $r->NombreElimino);
                //$k->__SET('FechaEliminacion', $r->FechaEliminacion);

                $result[] = $k;
            }

            return $result;

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }


    public function listarParroquia()
    {
        try {

            $result = array();
            $querySQL = "SELECT * FROM dbkermesse.vw_kermesseparroquia;";

            $stm = $this->conectar()->prepare($querySQL);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $vkp = new tbl_vw_KermesseParroquia();

                $vkp->setIdParroquia($r->idParroquia);
                $vkp->setNombre($r->nombre);

                $result[] = $vkp;
            }


            return $result;

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function listarUsuario()
    {
        try {
            $result = array();
            $querySQL = "SELECT * FROM dbkermesse.vw_usuariosglobales;";

            $stm = $this->conectar()->prepare($querySQL);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $vku = new tbl_vw_kermesseUsuario();

                $vku->setId_usuario($r->id_usuario);
                $vku->setNombre($r->nombre);

                $result[] = $vku;
            }


            return $result;

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }


    public function insertarKermesse(tbl_kermesse $k)
    {
        try {
            $fecha = date('Y-m-d H:i:s');

            //se quitaron 6 comodines correspondientes a los GET comentareados a partir de la linea 117 hasta 122
            $querySQL = "INSERT INTO dbkermesse.tbl_kermesse(idParroquia, nombre, fInicio, fFinal, descripcion, estado, usuario_creacion, fecha_creacion)
            VALUES(?, ?, ?, ?, ?, ?, 1, '$fecha');";
            $stm = $this->conectar()->prepare($querySQL);


            $stm->execute(
                    array(
                        $k->getIdParroquia(),
                        $k->getNombre(),
                        $k->getFinicio(),
                        $k->getFfinal(),
                        $k->getDescripcion(),
                        $k->getEstado()

                    )
                );


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function editarKermesse(tbl_kermesse $k)
    {
        try {
            $fecha = date('Y-m-d H:i:s');

            //se quitaron 6 comodines correspondientes a los GET comentareados a partir de la linea 117 hasta 122
            $querySQL = "UPDATE dbkermesse.tbl_kermesse SET
            idParroquia = ?,
            nombre = ?,
            fInicio = ?,
            fFinal = ?,
            descripcion = ?,
            estado = 2,
            usuario_modificacion = 19,
            fecha_modificacion = '$fecha' 
            WHERE id_kermesse = ?;";


            $this->conectar()->prepare($querySQL)
                ->execute(
                    array(
                        $k->getIdParroquia(),
                        $k->getNombre(),
                        $k->getFinicio(),
                        $k->getFfinal(),
                        $k->getDescripcion(),
                        $k->getId_kermesse()
                    )
                );


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function obtenerKermesse($id)
    {
        try {

            $querySQL = "SELECT * FROM dbkermesse.vw_kermessetabla WHERE Codigo_Kermesse = ?;";

            $stm = $this->conectar()->prepare($querySQL);
            $stm->execute(array($id));

            $r = $stm->fetch(PDO::FETCH_OBJ);
            $k = new tbl_vw_Kermesse();

            $k->setCodigo_kermesse($r->Codigo_Kermesse);
            $k->setNombre_Parroquia($r->Nombre_Parroquia);
            $k->setNombre($r->nombre);
            $k->setFechaInicio($r->FechaInicio);
            $k->setFechaFinalizacion($r->FechaFinalizacion);
            $k->setDescripcion($r->descripcion);
            $k->setEstado($r->estado);


            return $k;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminarKermesse($id)
    {
        try {

            $querySQL = "UPDATE dbkermesse.tbl_kermesse SET estado = 3 WHERE tbl_kermesse.id_kermesse = ?";
            $stm = $this->conectar()->prepare($querySQL);
            $stm->execute(array($id));

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function listarKermessecb()
    {
        try {

            $result = array();
            $querySQL = "SELECT id_kermesse , nombre FROM dbkermesse.tbl_kermesse where estado <> 3;";

            $stm = $this->conectar()->prepare($querySQL);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $k = new tbl_Kermesse();

                $k->setId_kermesse($r->id_kermesse);
                $k->setNombre($r->nombre);

                $result[] = $k;
            }


            return $result;

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

}









?>