<?php
// cadastro_usuario_processa.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coleta dos dados do formulário
    $nome = trim($_POST['nome_completo']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];
    $cpf = trim($_POST['cpf']);
    $data_nascimento = $_POST['data_nascimento'];
    
    // Endereço
    $rua = trim($_POST['rua']);
    $numero = trim($_POST['numero']);
    $complemento = trim($_POST['complemento']) ?: null;
    $bairro = trim($_POST['bairro']);
    $cidade = trim($_POST['cidade']);
    $estado = trim($_POST['estado']);
    $pais = trim($_POST['pais']);
    
    // Contato
    $celular = trim($_POST['celular']);
    $telefone = trim($_POST['telefone']) ?: null;
    
    // Perguntas de Segurança
    $pergunta1 = $_POST['pergunta1'];
    $resposta1 = $_POST['resposta1'];
    $pergunta2 = $_POST['pergunta2'];
    $resposta2 = $_POST['resposta2'];
    $pergunta3 = $_POST['pergunta3'];
    $resposta3 = $_POST['resposta3'];
    
    // Validação das Perguntas de Segurança (não devem ser iguais)
    if ($pergunta1 === $pergunta2 || $pergunta1 === $pergunta3 || $pergunta2 === $pergunta3) {
        die("Erro: As perguntas de segurança devem ser diferentes.");
    }
    
    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "root", "marketplace");
    
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
    
    // Preparação da consulta
    $stmt = $conn->prepare("INSERT INTO usuarios 
        (nome_completo, email, senha, cpf, rua, numero, complemento, bairro, cidade, estado, pais, celular, telefone, data_nascimento, 
        pergunta1, resposta1, pergunta2, resposta2, pergunta3, resposta3) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        die("Erro na preparação: " . $conn->error);
    }
    
    // Hash da senha e das respostas
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    $resposta1_hash = password_hash($resposta1, PASSWORD_DEFAULT);
    $resposta2_hash = password_hash($resposta2, PASSWORD_DEFAULT);
    $resposta3_hash = password_hash($resposta3, PASSWORD_DEFAULT);
    
    // Bind dos parâmetros
    $stmt->bind_param(
        "ssssssssssssssssssss",
       
        $nome,
        $email,
        $senha_hash,
        $cpf,
        $rua,
        $numero,
        $complemento,
        $bairro,
        $cidade,
        $estado,
        $pais,
        $celular,
        $telefone,
        $data_nascimento,
        $pergunta1,
        $resposta1_hash,
        $pergunta2,
        $resposta2_hash,
        $pergunta3,
        $resposta3_hash
    );
    
    // Execução da consulta
    if ($stmt->execute()) {
        echo "Cadastro de usuário realizado com sucesso! <a href='login_usuario.php'>Fazer Login</a>";
    } else {
        // Mensagem de erro mais detalhada
        echo "Erro no cadastro: " . $stmt->error;
    }
    
    // Fechamento da conexão
    $stmt->close();
    $conn->close();
}
?>
