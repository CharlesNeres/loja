<?php include ("cabecalho.php"); 
include ("conecta.php");
include ("bancoCategoria.php");

$categorias = listaCategorias($conexao);
?>
            <h1>Formulario de cadastro</h1>
            <form action="adicionaProduto.php" method="POST">
            <table>
                <tr>
                    <td>Nome</td>
                    <td><input class="form-control" type="text" name="nome"></td>                
                </tr>
                <tr>
                    <td>Preço</td>
                    <td><input class="form-control" type="number" name="preco"></td>
                </tr>    
                <tr>
                    <td>Descrição</td>
                    <td><textarea class="form-control" name="descricao"></textarea></td>
                </tr>   
                <tr>
                    <td>Categoria</td>
                    <td>
                        <?php foreach($categorias as $categoria):?>
                            <input type="radio" name="categoria_id" value="<?=$categoria['id']?>"> <?=$categoria['nome']?><br/>                            
                        <?php endforeach ?>
                        
                    </td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
                </tr>
            </table>
            </form>    
<?php include ("rodape.php"); ?>