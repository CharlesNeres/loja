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
                    <td></td>
                    <td><input type="checkbox" name="usado" value="true">Usado</td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select name="categoria_id" class="form-control">                            
                            <?php foreach($categorias as $categoria):?>
                            <option value="<?=$categoria['id']?>"> 
                                    <?=$categoria['nome']?>
                            </option>                                                           
                            <?php endforeach ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
                </tr>
            </table>
            </form>    
<?php include ("rodape.php"); ?>