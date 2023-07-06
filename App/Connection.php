<?php

namespace App;

class Connection{

    public static function getDb(){
        try{
           //	
            //	O host, dbname, usuário e senha devem ser trocados aqui:
            //
            $dsn = 'mysql:host=localhost;dbname=estacionamento';
            $username = "root";
            $password = "root";

            //
            //	Conexão com o servidor e banco de dados
            //
            $conn = new \PDO(
                $dsn, $username, $password
            ); 
            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //	Print de verificação de conexão com o servidor
            //	echo "Conectado com sucesso!";
            return $conn;
        }catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }

}


?>