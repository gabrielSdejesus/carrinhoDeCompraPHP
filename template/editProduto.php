<?php require_once 'header.php' ?>
<?php require_once '../repository/produtoRepository.php';
$prod = produtoRepository::findById($_GET['id']);
?>
<body>
<h1 style="color: black; font-family: 'Calibri'">Editar</h1>
<section>
    <form class="row g-3 formEdit" action="operationsProduto.php" method="POST">
        <input type="hidden" name="acao" value="editar">
        <div style="margin-left:2%; width: 300px">
            <div class="col-md-12">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $prod->getNome();?>" required>
            </div>
            <div class="col-md-12">
                <label class="form-label">Valor</label>
                <input type="number" class="form-control" name="valor" value="<?php echo $prod->getValor();?>" required>
            </div>
            <div class="col-12">
                <label class="form-label">Descricao</label>
                <textarea class="form-control" name="descricao" rows="3"></textarea>
            </div>
            <div class="col-12">
                <label class="form-label">Peso</label>
                <input type="number" class="form-control" name="peso" value="<?php echo $prod->getPeso();?>" required>
            </div>
            <div class="col-md-12">
                <label class="form-label">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $prod->getQuantidade();?>" required>
            </div>
            <div class="col-md-12">
                <label class="form-label">Codigo</label>
                <input type="number" class="form-control" name="codigo" value="<?php echo $prod->getCodigo();?>" required>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="gridCheck">
                    Disponibilidade
                </label>
                <input class="form-check-input" type="checkbox" name="disponibilidade">
            </div>
            <hr>
            <div class="col-12" style="text-align: center">
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                <button type="submit" class="btn btn-dark">Editar</button>
            </div>
        </div>
    </form>
</section>
</body>
<?php require_once 'footer.php' ?>
</html>