<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vendedor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="cadastro_vendedor_processa.php" method="POST">
            <h2>Cadastro de Vendedor</h2>
            <input type="text" name="nome_completo" placeholder="Nome Completo" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="text" name="cpf_cnpj" placeholder="CPF ou CNPJ" required>
            <textarea name="dados_bancarios" placeholder="Dados Bancários" required></textarea>
            <h3>Perguntas de Segurança</h3>
            <!-- Perguntas seguem o mesmo padrão do cadastro de usuário -->
            <label for="pergunta1">Pergunta 1</label>
            <select name="pergunta1" required>
                <option value="">Selecione uma pergunta</option>
                <!-- Opções iguais às do cadastro de usuário -->
            </select>
            <input type="text" name="resposta1" placeholder="Resposta" required>
            <label for="pergunta2">Pergunta 2</label>
            <select name="pergunta2" required>
                <!-- Opções iguais às do cadastro de usuário -->
            </select>
            <input type="text" name="resposta2" placeholder="Resposta" required>
            <label for="pergunta3">Pergunta 3</label>
            <select name="pergunta3" required>
                <!-- Opções iguais às do cadastro de usuário -->
            </select>
            <input type="text" name="resposta3" placeholder="Resposta" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
