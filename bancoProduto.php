<?php

function insereProduto($conexao, $nome, $preco, $descricao){
    $query = "insert into produtos (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";        
    return mysqli_query($conexao, $query);
} 

function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");
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