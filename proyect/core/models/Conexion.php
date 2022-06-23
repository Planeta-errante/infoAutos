<?php
class Conexion extends PD{
    private $host="localhost";
    private $tipoBD="mysql";
    private $nombreBD="infoautos";
    private $user="root";
    private $pass="";

    public function __construct(){
        try{
            parent::__construct($this->tipoBD.':host='.$this->host.':dbname='.$this->nombreBD,$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
        }catch(PDOException $ex){
            echo "Ocurrio un error ".$ex->getMessage();
        }
    }
}