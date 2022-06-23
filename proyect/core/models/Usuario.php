<?php
//include '';
//include_once '';

//require '';
require_once 'Conexion.php';
class Usuario{
    private $correo;
    private $password;
    private $nombres;
    private $fechaNac;
    private $telefono;
    private $codEstado;

    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo(){
        $this->correo = $correo;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword(){
        $this->password = $password;
    }

    public function getNombres(){
        return $this->nombres;
    }
    public function setNombres(){
        $this->nombres = $nombres;
    }

    public function getFechaNac(){
        return $this->fechaNac;
    }
    public function setFechaNac(){
        $this->fechaNac = $fechaNac;
    }   

    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono(){
        $this->telefono = $telefono;
    }

    public function getCodEstado(){
        return $this->codEstado;
    }
    public function setCodEstado(){
        $this->codEstado = $codEstado;
    }

    public function insModUsuario(){
        try{
            $conexion = new Conexion();
            $consulta = $conexion => prepare ("call sp_insMod_usuario(:correo,:password,:nombres,:fechaNac,:telefono,:codEstado)");
            $consulta->bindValue(':correo',$this->getCorreo(),PDO::PARAM_STR);
            $consulta->bindValue(':password',$this->getPassword(),PDO::PARAM_STR);
            $consulta->bindValue(':nombres',$this->getNombres(),PDO::PARAM_STR);
            $consulta->bindValue(':fechaNac',$this->getFechaNac(),PDO::PARAM_STR);
            $consulta->bindValue(':telefono',$this->getTelefono(),PDO::PARAM_STR);
            $consulta->bindValue(':codEstado',$this->getCodEstado(),PDO::PARAM_INT);
            $consulta->execute();
            $respuesta=$consulta->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $ex){
            echo "Ocurrio un error ".$ex->getMessage();
        }finally{
            $conexion=null;
            echo Respuesta['msg'];
        }
    }

}