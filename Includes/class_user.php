<?php

require_once "class_conexion.php";
class usuario extends conexion{

    private  $nombre;
    private $apellido;
    private $correo;
    private $pass;
    private $conexion;

    function __construct(){
        $this->conexion=new conexion;
        $this->conexion=$this->conexion->impresion();
    }

    function guardar_usuario($nombre_form,$apellido_form,$correo_form,$pass_form){
        $this->nombre=$nombre_form;
        $this->apellido=$apellido_form;
        $this->correo=$correo_form;
        $this->pass=$pass_form;

        $query_consulta= "INSERT INTO users(nombre, apellido, correo, pass) values (?,?,?,?)";
        $insert=$this->conexion->prepare($query_consulta);
        $array_datauser= array(
            $this->nombre,
            $this->apellido,
            $this->correo,
            $this->pass,
        );
        $insert->execute($array_datauser);
        return "registro exitoso";
    }
    function listar_usuarios(){
        $consulta="SELECT * FROM users";
        $respondido=$this->conexion->query($consulta);
        $resultado=$respondido->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }
    function listar_usuarios_especifico($id){
        $baticonsulta="SELECT * FROM users WHERE id= ?";
        $respondido=$this->conexion->Prepare($baticonsulta);
        $actualizacion=array($id);
        $respondido->execute($actualizacion);
        $resultado=$respondido->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function actualizar_usuario($id,$nombre,$apellido,$correo){

        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $query_update="UPDATE users SET nombre=? , apellido=? , correo=? WHERE id = $id";
        $update=$this->conexion->prepare($query_update);
        $array_update=array(
            $this->nombre,
            $this->apellido,
            $this->correo
        );
        $respuesta=$update->execute($array_update);
        
        return $respuesta;


    }
}