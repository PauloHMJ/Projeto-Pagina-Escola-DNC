<?php
    require_once "conexao.php";


    $sql = "CREATE TABLE IF NOT EXISTS pre_matricula (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        telefone VARCHAR(20) NOT NULL,
        data_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if($conn->query($sql) === TRUE){
        echo "TABELA CRIADA COM SUCESSO";
    }else{
        echo "ERRO AO CRIAR A TABELA: " . $conn->error;
    }
?>