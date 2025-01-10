<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome_completo'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $dados_bancarios = $_POST['dados_bancarios'];
    $pergunta1 = $_POST['pergunta1'];
    $resposta1 = password_hash($_POST['resposta1'], PASSWORD_DEFAULT);
    $pergunta2 = $_POST['pergunta2'];
    $resposta2 = password_hash($_POST['resposta2'], PASSWORD_DEFAULT);
    $pergunta3 = $_POST['pergunta3'];
    $resposta3 = password_hash($_POST['resposta3'], PASSWORD_DEFAULT);

    $conn = new mysqli("localhost", "root", "root", "marketplace");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO vendedores (nome_completo, email, senha, cpf_cnpj, dados_bancarios, pergunta1, resposta1, pergunta2, resposta2, pergunta3, resposta3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $nome, $email, $senha, $cpf_cnpj, $dados_bancarios, $pergunta1, $resposta1, $pergunta2, $resposta2, $pergunta3, $resposta3);

    if ($stmt->execute()) {
        echo "Cadastro de vendedor realizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
