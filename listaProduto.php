<?php include ("cabecalho.php");?>
<?php include ("conecta.php");?>
<?php include ("bancoProduto.php")?>


<table class="table table-striped table-bordered">
    <?php
    $produtos = listaProdutos($conexao);
    foreach ($produtos as $produto):
        ?>        
        <tr>
            <td><?= $produto['nome']?></td>
            <td><?= $produto['preco']?></td>
            <td><?= substr($produto['descricao'], 0, 40)?></td>
            <td><?= $produto['categoria_nome']?></td>
            <td><a class="btn btn-primary" href="alteraProdutoFormulario.php?id=<?=$produto['id']?>">alterar</a></td>
            <td>
                <form action="removeProduto.php" method="POST">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-danger">remover</a>
                </form>
            </td>
        </tr>
    <?php
    endforeach
    ?>

</table>
       
<?php include ("rodape.php"); ?>