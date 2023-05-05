<?php

require_once '../database/db_functions.php';
require_once '../model/produto.php';

class produtoRepository
{
    static protected $database;

    private function databaseOperation($sql){
        self::set_database();
        $result = self::$database->query($sql);
        if(!$result){
            exit('Falha na operação do BD!');
        }
        return $result;
    }

    public static function consult(){
        $sql = "SELECT * FROM PRODUTO ORDER BY ID DESC LIMIT 10";
        $result = (new produtoRepository)->databaseOperation($sql);

        $object_array = [];
        while($record = $result->fetch_assoc()) {
            $object_array[] = produto::instantiateConsult($record);
        }

        $result->free();
        return $object_array;
    }


    public static function addProduct(produto $novoProduto){
        $values = $novoProduto->getValuesAtributes();
        $separatorValue = "', '";
        $stringValues = implode($separatorValue, array_slice($values, 1));

        $attributes = $novoProduto->getAttributes();
        $separatorName = ", ";
        $stringNames = implode($separatorName, array_slice($attributes, 1));


        $sql = "INSERT INTO PRODUTO (";
        $sql .= $stringNames;
        $sql .= ") VALUES ( '";
        $sql .=  $stringValues;
        $sql .= "')";
        (new produtoRepository)->databaseOperation($sql);
        return self::$database->insert_id;
    }

    static protected function set_database() {
        self::$database = db_connect();
    }
}