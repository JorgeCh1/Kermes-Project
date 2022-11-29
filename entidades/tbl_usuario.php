<?php

class tbl_usuario
{
    private $id_usuario;
    private $nombres;
    private $apellidos;
    private $email;
    private $usuario;
    private $pwd;
    private $estado;

    public function getIdUsuario(){
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getPwd(){
        return $this->pwd;
    }

    public function setPwd($pwd){
        $this->pwd = $pwd;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    //OTRO MÉTODO
    /*
    public function __GET($k){
        return $this->$k;
    }

    public function __SET($k, $v){
        $this->$k = $v;
    }
    */
}