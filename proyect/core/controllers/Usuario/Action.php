<?php

class Action{
    private $action;
    private $arregloAction;

    public function __construct(){
        $this->arregloAction=array('insModUsuario');
    }

    public function getAction(){
        return $this->action;
    }
    public function setAction(){
        $this->action = $action;
    }

    public function getArregloAction(){
        return $this->arregloAction;
    }
    public function setCodEstado(){
        $this->arregloAction = $arregloAction;
    }
}