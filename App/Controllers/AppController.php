<?php

namespace App\Controllers;

// Recursos do Framework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {


    public function timeline(){
        session_start();
        
        if($_SESSION['id'] != '' && $_SESSION['nome'] != ''){
            //$this->render('/timeline');
            $this->renderDashboard('/timeline');
        } else {
            // Erro na autenticação e retornando para a view home
            header('Location: /?login=erro');
        }
       

    }
}