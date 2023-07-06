<?php
namespace MF\Init;

abstract class Bootstrap{
    private $routes;

    abstract protected function initRoutes();

    // Construtor
    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    // Método get
    public function getRoutes(){
        return $this->routes;
    }

    // Método set
    public function setRoutes(array $routes){
        $this->routes = $routes;
    }

    // Action dinâmico das rotas
    protected function run($url){
        foreach($this->getRoutes() as $key => $route){
           
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);

                $controller = new $class;
                $action = $route['action'];
                $controller->$action();

            }
        }
    }

    // Path/url que o usuário está
    protected function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

?>