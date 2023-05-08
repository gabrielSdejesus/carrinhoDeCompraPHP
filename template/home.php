<?php require_once 'header.php' ?>
<?php require_once '../security/session.php';
session::startSession(); ?>
<?php
    require_once '../repository/produtoRepository.php';
    $produtos = produtoRepository::consult();
?>
<body>
<section>
    <?php ?>
    <table class="table table-sm table-dark">
        <thead>
        <tr style="text-align: center">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Descrição</th>
            <th scope="col">Peso</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Codigo</th>
            <th scope="col">Disponibilidade</th>
            <th scope="col" style="color: chartreuse">EDITAR</th>
            <th scope="col" style="color: crimson">DELETE</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($produtos as $prod) { ?>
            <tr style="text-align: center">
                <td><?php echo ($prod->getId()); ?></td>
                <td><?php echo ($prod->getNome()); ?></td>
                <td><?php echo 'R$ '.($prod->getValor()); ?></td>
                <td><?php echo ($prod->getDescricao()); ?></td>
                <td><?php echo ($prod->getPeso()) . 'g' ?></td>
                <td><?php echo ($prod->getQuantidade()); ?></td>
                <td><?php echo ($prod->getCodigo()); ?></td>
                <td><?php echo ($prod->getDisponibilidade() == 1 ? 'Disponível' : 'Indisponível'); ?></td>
                <td><a class="btn btn-outline-success" href="editProduto.php?id=<?php echo $prod->getId()?>">Editar</a></td>
                <td><a class="btn btn-outline-danger" href="delete.php?id=<?php echo $prod->getId()?>">Remover</a></td>
            </tr>
        <?php } ?>
        </tbody>

    </table>
</section>
</body>
<?php require_once 'footer.php' ?>
</html>