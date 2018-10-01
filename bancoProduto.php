<?php

function insereProduto($conexao, $nome, $preco){
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";        
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