<?php
    
    $conn = new mysqli(
        "localhost",
        "root",
        "",# COLOQUE A SENHA DO SEU BANCO AQUI
        "forms_db"
    );

    if($conn->connect_error){
        die("Conexão com o banco falhou: " . $conn->connect_error);

    }
?>