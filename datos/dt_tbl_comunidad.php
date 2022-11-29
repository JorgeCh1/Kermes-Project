<?php

require_once 'conexion.php';
require_once '../entidades/tbl_comunidad.php';

class dt_tbl_comunidad extends Conexion
{

    private $myCon;



    public function listarComunidad()
    {

        try {
            $sql = "SELECT * FROM tbl_comunidad where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $c = new tbl_comunidad();

                $c->setIdcomunidad($r->id_comunidad);
                $c->setNombre($r->nombre);
                $c->setResponsable($r->responsable);
                $c->setDesc_contribucion($r->desc_contribucion);
                $c->setEstado($r->estado);


                $result[] = $c;

            }

            return $result;

        } catch (Exception $th) {
            die($th->getMessage());
        }





    }

    public function guardarComunidad(tbl_comunidad $tc)
    {

        try {
            $sql = "INSERT INTO tbl_comunidad (nombre,responsable,desc_contribucion,estado) 
            VALUES (?,?,?,?)";
            $result = array();
            $query = $this->conectar()->prepare($sql)->execute(
                array(
                    $tc->getNombre(),
                    $tc->getResponsable(),
                    $tc->getDesc_contribucion(),
                    $tc->getEstado()
                )
            );

            var_dump($query);

        } catch (Exception $e) {

            die($e->getMessage());
        }


    }


    public function editarComunidad(tbl_comunidad $ip)
    {

        try {
            $sql = "UPDATE tbl_comunidad set nombre=?, responsable=?,desc_contribucion=?,estado=1 where id_comunidad=?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(
                array(
                    $ip->getNombre(),
                    $ip->getResponsable(),
                    $ip->getDesc_contribucion(),
                    $ip->getEstado()
                )
            );

            var_dump($query);
        } catch (Exception $e) {

            die($e->getMessage());

        }


    }

    public function eliminarComunidad($id_comunidad)
    {

        try {
            $sql = "UPDATE tbl_comunidad set estado=3 where id_comunidad=?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(
                array(
                    $id_comunidad
                )
            );
        } catch (Exception $e) {

            die($e->getMessage());
        }




    }



    public function mostrarComunidad($id_comunidad)
    {
        try {
            $sql = "SELECT * FROM tbl_comunidad where estado<>3 and id_comunidad=?;";
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_comunidad));
    
            $C = $stm->fetch(PDO::FETCH_OBJ);
    
            $tbc = new tbl_comunidad();
    
            $tbc->setNombre($C->nombre);
            $tbc->setResponsable($C->responsable);
           $tbc->setDesc_contribucion($C->desc_contribucion);
            $tbc->setEstado($C->estado);
    
    
            return $tbc;
        } catch (Exception $th) {
            die($th->getMessage());
        }

      



    }

}




?>