<?php

require_once 'conexion.php';
require_once '../entidades/tbl_categoria_gastos.php';

class dt_tbl_categoriaGastos extends Conexion
{



    public function editarCategoriaGastos(tbl_categoria_gastos $u)
    {
        try {

            $querySQL = "UPDATE dbkermesse.tbl_categoria_gastos SET nombre_categoria=?, descripcion=?, estado=2 WHERE id_categoria_gastos = ?";
            $stm = $this->conectar()->prepare($querySQL);



            $stm->execute(
                array(
                    $u->getNombre_categoria(),
                    $u->getDescripcion(),
                    $u->getId_categoria_gastos()
                )
            );


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function obtenerCategoriaGastos($id)
    {
        try {

            $querySQL = "SELECT * FROM dbkermesse.tbl_categoria_gastos WHERE id_categoria_gastos = ?";
            $stm = $this->conectar()->prepare($querySQL);


            $stm->execute(array($id));

            $r = $stm->fetch(PDO::FETCH_OBJ);
            $u = new tbl_categoria_gastos();

            $u->setId_categoria_gastos($r->setId_categoria_gastos);
            $u->setNombre_categoria($r->nombre_categoria);
            $u->setDescripcion($r->descripcion);
            $u->SetEstado($r->estado);


            return $u;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function insertarCategoriaGastos(tbl_categoria_gastos $u)
    {
        try {

            $querySQL = "INSERT INTO dbkermesse.tbl_categoria_gastos(id_categoria_gastos, nombre_categoria, descripcion, estado) VALUES(?, ?, ?, 1);";
            $stm = $this->conectar()->prepare($querySQL);

            $stm->execute(
                array(
                    $u->getId_categoria_gastos(),
                    $u->getNombre_categoria(),
                    $u->getDescripcion()
                )
            );



        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarCategoriaGastos()
    {
        try {

            $result = array();
            $querySQL = "SELECT * FROM dbkermesse.tbl_categoria_gastos WHERE estado <> 3;";

            $stm = $this->conectar()->prepare($querySQL);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $us = new tbl_categoria_gastos;

                $us->setId_categoria_gastos($r->id_categoria_gastos);
                $us->setNombre_categoria($r->nombre_categoria);
                $us->setDescripcion($r->descripcion);
                $us->SetEstado($r->estado);
                $result[] = $us;
            }


            return $result;

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function eliminarCategoriaGastos($id)
    {
        try {


            $querySQL = "UPDATE dbkermesse.tbl_categoria_gastos SET estado = 3 WHERE id_categoria_gastos = ?";
            $stm = $this->conectar()->prepare($querySQL);
            $stm->execute(array($id));

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
}



?>