<?php

    include_once('conexao.php');

    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $qtde=$_POST['qtde'];

    $sql = 'INSERT INTO produtos(nome,preco,qtde) VALUES (:nome,:preco,:qtde)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':preco',$preco);
    $stmt->bindParam(':qtde',$qtde);
    $stmt->execute();