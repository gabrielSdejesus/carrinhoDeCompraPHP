<?php

require_once __DIR__ . '../../model/produto.php';
require_once __DIR__ . '../../repository/produtoRepository.php';

$produto = array(
    "nome" => $_POST["nome"],
    "valor" => $_POST["valor"],
    "descricao" => $_POST["descricao"],
    "peso" => $_POST["peso"],
    "quantidade" => $_POST["quantidade"],
    "codigo" => $_POST["codigo"],
    "disponibilidade" => empty($_POST["disponibilidade"]) ? 0 : 1
);

switch ($_POST["acao"]) {
    case 'cadastrar' :
        $novoProduvo = produto::instantiate($produto);
        produtoRepository::addProduct($novoProduvo);
        break;
    case 'editar' :
        $produto['id'] = $_POST['id'];
        $produtoEditado = produto::instantiate($produto);
        produtoRepository::editProduct($produtoEditado);
    break;
}
header('Location: home.php');
?>