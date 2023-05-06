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

    public static function findById($id){
        $sql = "SELECT * FROM PRODUTO p WHERE p.id = $id";
        $result = (new produtoRepository)->databaseOperation($sql);

        $object = null;
        while($record = $result->fetch_assoc()) {
            $object = produto::instantiateConsult($record);
        }

        $result->free();
        return $object;
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

    public static function editProduct(produto $produtoEditado){
        $values = $produtoEditado->getValuesAtributes();
        $attributes = $produtoEditado->getAttributes();
        $id = $values[0];

        array_shift($values);
        array_shift($attributes);

        $setPairs = array();
        foreach ($attributes as $index => $name) {
            $value = $values[$index];
            $setPairs[] = "$name = '$value'";
        }
        $setList = implode(', ', $setPairs);
        $sql = "UPDATE PRODUTO SET $setList WHERE id = $id";
        (new produtoRepository)->databaseOperation($sql);
        return $id;
    }

    public static function deleteProduto($id){
        $sql = "DELETE FROM PRODUTO p WHERE p.id = $id";
        (new produtoRepository)->databaseOperation($sql);
    }

    static protected function set_database() {
        self::$database = db_connect();
    }
}