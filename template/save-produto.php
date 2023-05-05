<?php

require_once __DIR__ . '../../model/produto.php';
require_once __DIR__ . '../../repository/produtoRepository.php';


switch ($_POST["acao"]) {
    case 'cadastrar' :
        $produto = array(
            "nome" => $_POST["nome"],
            "valor" => $_POST["valor"],
            "descricao" => $_POST["descricao"],
            "peso" => $_POST["peso"],
            "quantidade" => $_POST["quantidade"],
            "codigo" => $_POST["codigo"],
            "disponibilidade" => empty($_POST["disponibilidade"]) ? 0 : 1
        );
        $novoProduvo = produto::instantiate($produto);
        produtoRepository::addProduct($novoProduvo);
        break;
}
header('Location: home.php');
?>