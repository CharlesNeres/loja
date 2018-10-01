<?php include ("cabecalho.php");?>

            <?php
                $nome = $_GET['nome'];
                $preco = $_GET['preco'];
            ?>
           <p class="alert-success">Produto <?= $nome; ?>, <?= $preco;?> adiciona com sucesso!  </p> 

<?php include ("rodape.php");?>