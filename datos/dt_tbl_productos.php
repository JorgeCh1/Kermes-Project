<?php

require_once 'conexion.php';
require_once '../entidades/tbl_productos.php';
class dt_tbl_productos extends Conexion{
    private $myCon;

    public function listarProducto()
    {
        try 
        {
            $sql = "SELECT * FROM tbl_productos where estado<>3;"; 
            $result = array(); 
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $tp = new tbl_productos();

                $tp->setId_producto($r->id_producto);
                $tp->setId_cat_producto($r->id_cat_producto);
                $tp->setNombre($r->nombre);
                $tp->setDescripcion($r->descripcion);
                $tp->setCantidad($r->cantidad);
                $tp->setPreciov_sugerido($r->preciov_sugerido);
                $tp->setEstado($r->estado);

         

                $result[] = $tp;
            }
            
            return $result;
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
    public function guardarProducto(tbl_productos $tp)
    {
        try 
        {
            
            $sql = "INSERT INTO tbl_productos (nombre,descripcion,cantidad,preciov_sugerido,estado) VALUES 
                    (?,?,?,?,1)";
            $query = $this->conectar()->prepare($sql)->execute(array(
            
            
                $tp->getNombre(),
                $tp->getDescripcion(),
                $tp->getCantidad(),
                $tp->getPreciov_sugerido()));

            var_dump($query);
            
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
        
    }
    
    public function mostrarProducto($id_producto)
    {
        try 
        {
            $sql = "SELECT * FROM tbl_productos where estado<>3 and id_producto=?;"; 
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_producto));

            $r = $stm->fetch(PDO::FETCH_OBJ);
            $tp = new tbl_productos();

             $tp->setId_producto($r->id_producto);
             $tp->setId_comunidad($r->id_comunidad);
             $tp->setId_cat_producto($r->id_cat_producto);
             $tp->setNombre($r->nombre);
             $tp->setDescripcion($r->descripcion);
             $tp->setCantidad($r->cantidad);
             $tp->setPreciov_sugerido($r->preciov_sugerido);
             $tp->setEstado($r->estado);

            return $tp;
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function editarProducto(tbl_productos $tp)
    {
        try 
        {
            $sql = "UPDATE tbl_productos SET   nombre = ?, descripcion= ?, cantidad =?, preciov_sugerido=?,estado=2 where id_producto = ?";
            $query = $this->conectar()->prepare($sql);
            
            $query->execute(array(
          
               $tp->getNombre(),
               $tp->getDescripcion(),
               $tp->getCantidad(),
               $tp->getPreciov_sugerido(),
               $tp->getId_producto()
             
            ));
            
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function eliminarProducto($id_producto)
    {
        try 
        {
            
            $sql = "DELETE FROM `dbkermesse`.`tbl_productos` WHERE id_producto = ?;";
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