<?php

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";        
    return mysqli_query($conexao, $query);
} 

function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on c.id = p.categoria_id");
    //mandar pegar a busca associada a esse resultado

    while($produto = mysqli_fetch_assoc($resultado)){//poderia fazer assim e exibir mas preciso de um loop         
        array_push($produtos, $produto);
    }

    return $produtos;
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query); //quem vai executar a query
}

function buscaProduto($conexao, $id){
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id_produto, $nome, $preco, $descricao, $categoria_id, $usado){
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} 
    where id = '{$id_produto}'";

    return mysqli_query($conexao, $query);
    

}