<?php

namespace core\classes;

use PDO;

class Database{

    private $ligacao;

    private function ligar(){
        //Conectando a base de dados
        $this->ligacao = new PDO(
            'mysql:'.
            'host='.MYSQL_SERVER.';'.
            'dbname='.MYSQL_DATABASE.';'.
            'charset='.MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)//;
        );
    }

    // -----------
    private function desligar(){
        //Desconect-se a base de dados
    }
}




/*
responsavel pela gestão da base de dados

define('MYSQL_SERVER', 'localhost');
define('MYSQL_DATABASE', 'php_store');
define('MYSQL_USER', 'user_php_store');
define('MYSQL_PASS', '');
define('MYSQL_CHARSET', 'utf8');

CRUD
Create -  INSERT
Read - SELECT
Update - UPDATE
Delete  DELETE
*/

?>