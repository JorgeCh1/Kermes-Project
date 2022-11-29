<?php

require_once 'conexion.php';
require_once '../entidades/tbl_categoria_productos.php';


class dt_tbl_categoriaProducto extends Conexion
{

    public function listarCategoriaProdcuto()
    {
        try {
            $sql = "SELECT * FROM tbl_categoria_producto WHERE estado<>3";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {

                $tp = new tbl_categoria_producto();

                $tp->setId_categoria_producto($r->id_categoria_producto);
                $tp->setNombre($r->nombre);
                $tp->setDescripcion($r->descripcion);
                $tp->setEstado($r->estado);

                $result[] = $tp;
            }

            return $result;
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }


    public function guardarCategoriaProducto(tbl_categoria_producto $tcp)
    {

        try {
            $sql = " INSERT INTO tbl_categoria_producto (nombre,descripcion,estado) values(?,?,1)";
            $reult = array();
            $stm = $this->conectar()->prepare($sql)->execute(
                array(
                    $tcp->getNombre(),
                    $tcp->getDescripcion(),

                )
            );

            var_dump($stm);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function editarCategoriaProducto(tbl_categoria_producto $tp)
    {
        try {
            $sql = "UPDATE tbl_categoria_producto SET nombre=?,descripcion=?,estado=2 where id_categoria_producto=?";
            $result = array();
            $stm = $this->conectar()->prepare($sql);

            $stm->execute(
                array(
                    $tp->getNombre(),
                    $tp->getDescripcion(),
                    $tp->getEstado(),
                    $tp->getId_categoria_producto()

                )
            );
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }


    public function mostrarCategoriaPorducto($id_categoria_producto)
    {

        try {
            $sql = "SELECT * FROM tbl_categoria_producto where estado<>3 and id_categoria_producto=?;";
            $stm = $this->conectar()->prepare($sql);

            $stm->execute(
                array(
                    $id_categoria_producto
                )
            );


            $r = $stm->fetch(PDO::FETCH_OBJ);

            $tp = new tbl_categoria_producto();

            $tp->setId_categoria_producto($r->id_categoria_producto);
            $tp->setNombre($r->nombre);
            $tp->setDescripcion($r->descripcion);
            $tp->setEstado($r->estado);

            return $tp;
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
    public function eliminarCategoria($id_categoria_producto)
    {
        try {
            $sql = "DELETE FROM `dbkermesse`.`tbl_categoria_producto` WHERE id_categoria_producto = ?;";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $id_categoria_producto
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}