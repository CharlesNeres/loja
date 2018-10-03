<?php include ("cabecalho.php");?>
<?php include ("conecta.php");?>
<?php include ("bancoProduto.php");?>

            <?php

                
                $nome = $_POST['nome'];
                $preco = $_POST['preco'];
                $descricao = $_POST['descricao'];
                $categoria_id = $_POST['categoria_id'];
                if(array_key_exists('usado', $_POST)){//verificar se o campo existe pra não dar erro se não clicar no campo do formulario
                    $usado = "true";
                }else {
                    $usado = "false";
                }
            
                
                if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
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