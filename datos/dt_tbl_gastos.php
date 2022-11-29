<?php

require_once 'conexion.php';
require_once '../entidades/tbl_gastos.php';


class dt_tbl_gastos extends Conexion
{


    public function listarGastos()
    {


        try {
            $sql = "SELECT * FROM dbkermesse.vista_gastos where estado <> 3 ;";
            $result = array();

            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $us = new tbl_gastos();

                $us->setId_registro_gastos($r->id_registro_gastos);
                $us->setIdkermesse($r->id_kermesse);
                $us->setIdCatGastos($r->idCatGastos);
                $us->setFechaGastos($r->fechaGasto);
                $us->setConcepto($r->concepto);
                $us->setMonto($r->monto);
                $us->setEstado($r->estado);



                $result[] = $us;
            }
            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }





    }

    public function reGastos(tbl_gastos $icd)
    {
        try {
            $fecha = date('y-m-d');
            $result = array();
            $sql = "INSERT INTO dbkermesse.tbl_gastos(idKermesse, idCatGastos, fechaGasto, concepto, monto, usuario_creacion, fecha_creacion, estado)
                     VALUES (?, ?, ?, ?, ?, 1, '$fecha', 1)";
            $query = $this->conectar()->prepare($sql)->execute(
                array(
                    $icd->getIdKermesse(),
                    $icd->getIdCatGastos(),
                    $icd->getFechaGastos(),
                    $icd->getConcepto(),
                    $icd->getMonto()

                )
            );





        } catch (Exception $e) {
            die($e->getMessage());

        }
    }

    public function listarKermese()
    {
        try {
            $sql = "SELECT * FROM dbkermesse.vw_kermesseglobal;";
            $result = array();

            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $vk = new Vw_KermesseGlobalCB();

              $vk->setId_kermesse($r->id_kermesse);
              $vk->setNombre($r->nombre);


                $result[] = $vk;
            }

            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function listarCategoriaGastos()
    {
        try {
            $sql = "SELECT * FROM dbkermesse.vw_categoria_gastos;";
            $result = array();

            $stm = $this->conectar()->prepare($sql);
            $stm->execute();
            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $c) {
                $vcp = new vw_categoria_gastos();
                 
                $vcp->setId_categoria_gastos($c->id_categoria_gastos);
                $vcp->setNombre_categoria($c->nombre_categoria);
                $vcp->setDescripcion($c->descripcion);
             
                $result[] = $vcp;
            }

            return $result;


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function UpdateGastos(tbl_gastos $p){
        try {
            $fecha = date('Y/m/d');
            $sql = "UPDATE dbkermesse.tbl_gastos SET
            idKermesse = ?,
            idCatGastos = ?,
            fechaGasto = ?,
            concepto = ?,
            monto = ?,
            usuario_modificacion = 1,
            fecha_modificacion = '$fecha',
            estado = 2
            WHERE id_registro_gastos = ?";

            $stm = $this->conectar()->prepare($sql);
            $stm->execute(
                array(
                    $p->getIdKermesse(),
                    $p->getIdCatGastos(),
                    $p->getFechaGastos(),
                    $p->getConcepto(),
                    $p->getMonto(),
                    $p->getId_registros_gastos()
                ));

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function eliminarGasto($id){
        try {
            $sql = "UPDATE dbkermesse.tbl_gastos SET estado = 3 WHERE tbl_gastos.id_registro_gastos = ?";
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id));


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function getGastos($id)
    {

        try {
            $sql = "SELECT * FROM dbkermesse.tbl_gastos where id_registro_gastos= ?";
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id));


            $r = $stm->fetch(PDO::FETCH_OBJ);
            
            $icd = new tbl_gastos();

            
            $icd->setId_registro_gastos($r->id_categoria_gastos);
            $icd->setIdkermesse($r->setIdkermesse);
            $icd->setIdCatGastos($r->idCatGastos);
            $icd->setFechaGastos($r->fechaGastos);
            $icd->setConcepto($r->concepto);
            $icd->setMonto($r->monto);
            $icd->setEstado($r->estado); 



            return $icd;


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }




}





?>