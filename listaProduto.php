<?php include ("cabecalho.php");?>
<?php include ("conecta.php");?>
<?php include ("bancoProduto.php")?>


<table class="table table-striped table-bordered">
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Remover</th>  
    </tr>
    <?php
    $produtos = listaProdutos($conexao);
    foreach ($produtos as $produto):
        ?>        
        <tr>
            <td><?= $produto['nome']?></td>
            <td><?= $produto['preco']?></td>
            <td><?= substr($produto['descricao'], 0, 40)?></td>
            <td><?= $produto['categoria_nome']?></td>
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