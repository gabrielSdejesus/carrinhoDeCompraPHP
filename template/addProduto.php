<?php require_once 'header.php' ?>
    <body>
    <h1 style="color: black; font-family: 'Calibri'">Adicionar um novo produto</h1>
    <section>
        <form class="row g-3 formEdit" action="operationsProduto.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            <div style="width: 300px; margin-top: 10px">
                <div class="col-md-12">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Sabão em pó" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Valor</label>
                    <input type="number" class="form-control" name="valor" placeholder="50" required>
                </div>
                <div class="col-12">
                    <label class="form-label">Descricao</label>
                    <textarea class="form-control" name="descricao" rows="3" placeholder="Lavar roupas"></textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Peso</label>
                    <input type="number" class="form-control" name="peso" placeholder="75" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade"  placeholder="10" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Codigo</label>
                    <input type="number" class="form-control" name="codigo" placeholder="95712358" required>
                </div>
                <div class="form-check" style="margin-top: 10px">
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