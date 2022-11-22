<?php

require_once("conexion.php");
require_once("../entidades/tbl_parroquia.php");
class dt_tbl_parroquia extends Conexion{

    public function listarParroquia()
    {    
        try
        {
            $sql = "SELECT * FROM tbl_parroquia where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $tp = new tbl_productos();
                $tp->setIdProducto($r->id_producto);
                $tp->setIdComunidad($r->id_comunidad);
                $tp->setIdCatProducto($r->id_cat_producto);
                $tp->setNombre($r->nombre);
                $tp->setDescripcion($r->descripcion);
                $tp->setCantidad($r->cantidad);
                $tp->setPreciovSugerido($r->preciov_sugerido);
                $tp->setEstado($r->estado);

                $result[] = $tp;
            }
            return $result;
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function guardarProductos(tbl_productos $tp)
    {
        try 
        {
            
            $sql = "INSERT INTO tbl_productos (nombre, descripcion, cantidad, preciov_sugerido, estado) VALUES 
                    (?,?,?,?,1)";
            $query = $this->conectar()->prepare($sql)->execute(array(
                $tp->getNombre(), 
                $tp->getDescripcion(), 
                $tp->getCantidad(), 
                $tp->getPreciovSugerido()
            ));

            var_dump($query);
            
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
        
    }
    public function editarProductos(tbl_productos $tp)
    {
        try 
        {
            $sql = 'UPDATE tbl_productos SET nombres = ?, descripcion = ?, cantidad = ?, preciov_sugerido = ?, estado = 2 where id_producto = ?';
            $query = $this->conectar()->prepare($sql);
            $query->execute(array(
                $tp->getNombre(),
                $tp->getDescripcion(),
                $tp->getCantidad(),
                $tp->getPreciovSugerido(),
                $tp->getIdProducto()
            ));
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function mostrarProductos($id_producto)
    {
        try 
        {
            $sql = "SELECT * FROM tbl_productos where estado<>3 and id_producto = ?;"; 
            //$result = array(); 
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_producto));

            $r = $stm->fetch(PDO::FETCH_OBJ);

            $tp = new tbl_productos();

            $tp->setIdProducto($r->id_producto);
            $tp->setIdComunidad($r->id_comunidad);
            $tp->setIdCatProducto($r->id_cat_producto);
            $tp->setNombre($r->nombre);
            $tp->setDescripcion($r->descripcion);
            $tp->setCantidad($r->cantidad);
            $tp->setPreciovSugerido($r->preciov_sugerido);
            $tp->setEstado($r->estado);

            //$result[] = $tp;   
            return $tp;
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
    public function eliminarProductos($id_producto)
    {
        try 
        {
            $sql = "DELETE FROM tbl_producto WHERE id_producto = ?";
            $query = $this->conectar()->prepare($sql);
            
            $query->execute(array(
                $id_producto
            ));
            
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}
?>