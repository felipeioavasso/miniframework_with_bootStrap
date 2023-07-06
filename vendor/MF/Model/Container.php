<?php

namespace MF\Model;

// Recursos do Framework
use App\Connection;

class Container{

    public static function getModel($model){
        // retornar o modelo solicitado já instanciado e com a conexão já estabelecida
        $class = "\\App\\Models\\" . ucfirst($model);
        
        // Instância de conexão
        $conn = Connection::getDb();
        return new $class($conn);
    }
}


?>