<?php

if(isset($_REQUEST['action']))){
    require_once 'Action.php';
    $action = isset($_REQUEST['action'])?$_REQUEST['action']:null;
    $action = filter_var($_REQUEST['action'], FILTER_SANITIZE_STRING);
    $general = new Action();
    $general -> setAction($action);
    if(in_array($general->getAction(),$general->getArregloAction())){
        require_once '../../models/Usuario.php';
        switch($general->getAction()){
            case 'insModUsuario':
                $correo = isset($_REQUEST['txt_correo'])?$_REQUEST['txt_correo']:null;
                $correo = filter_var($correo, FILTER_SANITIZE_STRING);

                $password = isset($_REQUEST['txt_password'])?$_REQUEST['txt_password']:null;
                $password = filter_var($password, FILTER_SANITIZE_STRING);

                $nombres = isset($_REQUEST['txt_nombres'])?$_REQUEST['txt_nombres']:null;
                $nombres = filter_var($nombres, FILTER_SANITIZE_STRING);

                $fechaNac = isset($_REQUEST['txt_fechaNac'])?$_REQUEST['txt_fechaNac']:null;
                $fechaNac = filter_var($fechaNac, FILTER_SANITIZE_STRING);

                $telefono = isset($_REQUEST['txt_telefono'])?$_REQUEST['txt_telefono']:null;
                $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);

                $codEstado = isset($_REQUEST['txt_codEstado'])?$_REQUEST['txt_codEstado']:null;
                $codEstado = filter_var($codEstado, FILTER_SANITIZE_NUMBER_INT);

                $us = new Usuario();
                $us -> setCorreo($correo);
                $us -> setPassword($password);
                $us -> setNombres($nombres);
                $us -> setFechaNac($fechaNac);
                $us -> setTelefono($telefono);
                $us -> setCodEstado($codEstado);

                echo $us -> insModUsuario();
        }
    }
}