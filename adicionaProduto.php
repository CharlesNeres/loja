<?php include ("cabecalho.php");?>
<?php include ("conecta.php");?>
<?php include ("bancoProduto.php");?>

            <?php

                
                $nome = $_POST['nome'];
                $preco = $_POST['preco'];
                $descricao = $_POST['descricao'];
                
            
                
                if(insereProduto($conexao, $nome, $preco, $descricao)) { ?>
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