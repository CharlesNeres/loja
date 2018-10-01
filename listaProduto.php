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
        </tr>
    <?php
    endforeach
    ?>

</table>
       
<?php include ("rodape.php"); ?>