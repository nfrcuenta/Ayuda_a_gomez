<?php

class conexion{

    private $host="localhost";#definicion de servidor
    private $user="root";#usuario de el xampp
    private $password="";#Contraseña de el xampp
    private $base_de_datos="proyectoispa";#nombre de la base de datos
    private $respuesta_conexion;

    function __construct(){
        #la variable puede tener cualquier nombre
        $recibimiento="mysql:hos=".$this->host.";dbname=".$this->base_de_datos.";charset=utf8mb4";  
        #nombre de e gestor de datos y el recibimiento de lo que se va a obtener
        #se pone elgestor de base de datos el host declarado anteriormente junto a la base de datos y su cotejamiento
    
        try {
            $this->respuesta_conexion= new PDO($recibimiento, $this->user, $this->password, ) ;#pdoya esta implicita en el codigo al usar php
        } catch (exception $a)/*para mostrar la falla en el codigo y la variable puede tener el nombre que sea*//*Aqui es que va la condicion */ {
            #catch captura el proceso fue erroneo
            $this->respuesta_conexion="Error al conectarse a la base de datos :C";
            echo $this->respuesta_conexion.$a->getMessage();#asi nos dice que error es
        }
    
    }
    function impresion(){

        return $this->respuesta_conexion;

    }
}


?>
