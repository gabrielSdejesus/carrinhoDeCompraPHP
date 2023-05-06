<?php
require_once '../repository/produtoRepository.php';
if(!empty($_GET['id'])) {
    produtoRepository::deleteProduto($_GET['id']);
}

header('Location: home.php');
?>