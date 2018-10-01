<?php include ("cabecalho.php");?>
<?php include ("conecta.php");?>
<?php include ("bancoProduto.php");?>

            <?php

                
                $nome = $_GET['nome'];
                $preco = $_GET['preco'];
                
            
                
                if(insereProduto($conexao, $nome, $preco)) { ?>
                    <p class="text-success">Produto <?= $nome; ?>, <?= $preco;?> adiciona com sucesso!  </p>
                <?php } else { 
                    $msg = mysqli_error($conexao);
                    ?>
                    <p class="text-danger">Produto <?= $nome; ?> não foi adicionado com sucesso: <?= $msg?>  </p>
                <?php 
                }

                mysqli_close($conexao);
                ?>


<?php include ("rodape.php");?>