<?php
    require_once "database.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nome = $_POST['Name'] ?? '';
        $email = $_POST['Email'] ?? '';
        $telefone = $_POST['Phone'] ?? '';

        $stmt = $conn->prepare(
            "INSERT INTO pre_matricula (nome, email, telefone)
            VALUES (?, ?, ?)"
        );

        $stmt->bind_param("sss", $nome, $email, $telefone);

        if ($stmt ->execute()) {
            header("location: agradecimento.html");
            exit();
        }else{
            echo"Error ao enviar o formulario: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }

?>