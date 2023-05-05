<?php require_once 'header.php' ?>
    <body>
    <h1 style="color: black; font-family: 'Calibri'">Adicionar um novo produto</h1>
    <section>
        <form class="row g-3 formEdit" action="save-produto.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            <div style="margin-left:2%; width: 300px">
                <div class="col-md-12">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Valor</label>
                    <input type="number" class="form-control" name="valor" required>
                </div>
                <div class="col-12">
                    <label class="form-label">Descricao</label>
                    <textarea class="form-control" name="descricao" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Peso</label>
                    <input type="number" class="form-control" name="peso" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Codigo</label>
                    <input type="number" class="form-control" name="codigo" required>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="gridCheck">
                        Disponibilidade
                    </label>
                    <input class="form-check-input" type="checkbox" name="disponibilidade">
                </div>
                <hr>
                <div class="col-12" style="text-align: center">
                    <button type="submit" class="btn btn-dark">Adicionar</button>
                </div>
            </div>
        </form>
    </section>
    </body>
<?php require_once 'footer.php' ?>
</html>