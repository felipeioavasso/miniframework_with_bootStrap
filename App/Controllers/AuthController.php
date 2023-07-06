<?php

namespace App\Controllers;

// Recursos do Framework
use MF\Controller\Action;
use MF\Model\Container;

class AuthController extends Action {
    
    public function autenticar(){

        // Buscando do BD o modelo 'usuario'
        $usuario = Container::getModel('usuario');

        $usuario->__set('email', $_POST['email']);
        $usuario->__set('senha', $_POST['senha']);

        $retorno = $usuario->autenticarUsuario();
        
        
    }

    public function sair(){
        session_start();
        session_destroy();
        header('Location: /');
    }

}