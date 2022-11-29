<?php

class tbl_vw_usuariosglobales
{


    private $id_usuario;
    private $nombres;

    public function __GET($k)
    {
        return $this->$k;
    }
    public function __SET($k, $v)
    {
        return $this->$k = $v;
    }
}



?>