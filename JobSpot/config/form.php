<?php

    

        include_once('../config/conexao.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
        
            // Inserir os dados no banco de dados
            $sql = "INSERT INTO clientes (nome, sobrenome, email, senha) VALUES (?, ?, ?, ?)";
            $stmt = $mysqli->prepare($sql);
            
            if ($stmt) {
                $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha);
                if ($stmt->execute()) {
         
                } else {
                    header('Location: login.php');
                }
                $stmt->close();
            } else {
                echo "Erro na preparação da declaração: " . $mysqli->error;
            }
        }
        
        $mysqli->close();
        ?>
        