<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="cadastro_usuario_processa.php" method="POST">
            <h2>Cadastro de Usuário</h2>
            
            <!-- Informações Pessoais -->
            <input type="text" name="nome_completo" placeholder="Nome Completo" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="text" name="cpf" placeholder="CPF (xxx.xxx.xxx-xx)" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
            <input type="date" name="data_nascimento" placeholder="Data de Nascimento" required>
            
            <!-- Endereço -->
            <input type="text" name="rua" placeholder="Rua" required>
            <input type="text" name="numero" placeholder="Número" required>
            <input type="text" name="complemento" placeholder="Complemento">
            <input type="text" name="bairro" placeholder="Bairro" required>
            <input type="text" name="cidade" placeholder="Cidade" required>
            <input type="text" name="estado" placeholder="Estado" required>
            <input type="text" name="pais" placeholder="País" required>
            
            <!-- Contato -->
            <input type="tel" name="celular" placeholder="Celular (xx) xxxxx-xxxx" pattern="\(\d{2}\) \d{5}-\d{4}" required>
            <input type="tel" name="telefone" placeholder="Telefone (opcional)" pattern="\(\d{2}\) \d{4}-\d{4}">
            
            <!-- Perguntas de Segurança -->
            <h3>Perguntas de Segurança</h3>
            
            <label for="pergunta1">Pergunta 1</label>
            <select name="pergunta1" required>
                <option value="">Selecione uma pergunta</option>
                <option value="Qual é o nome do seu primeiro animal de estimação?">Qual é o nome do seu primeiro animal de estimação?</option>
                <option value="Qual é o nome da sua mãe?">Qual é o nome da sua mãe?</option>
                <option value="Qual foi o modelo do seu primeiro carro?">Qual foi o modelo do seu primeiro carro?</option>
                <option value="Qual é o nome da sua cidade natal?">Qual é o nome da sua cidade natal?</option>
                <option value="Qual é o nome do seu melhor amigo de infância?">Qual é o nome do seu melhor amigo de infância?</option>
            </select>
            <input type="text" name="resposta1" placeholder="Resposta" required>
            
            <label for="pergunta2">Pergunta 2</label>
            <select name="pergunta2" required>
                <option value="">Selecione uma pergunta</option>
                <option value="Qual é o nome do seu primeiro animal de estimação?">Qual é o nome do seu primeiro animal de estimação?</option>
                <option value="Qual é o nome da sua mãe?">Qual é o nome da sua mãe?</option>
                <option value="Qual foi o modelo do seu primeiro carro?">Qual foi o modelo do seu primeiro carro?</option>
                <option value="Qual é o nome da sua cidade natal?">Qual é o nome da sua cidade natal?</option>
                <option value="Qual é o nome do seu melhor amigo de infância?">Qual é o nome do seu melhor amigo de infância?</option>
            </select>
            <input type="text" name="resposta2" placeholder="Resposta" required>
            
            <label for="pergunta3">Pergunta 3</label>
            <select name="pergunta3" required>
                <option value="">Selecione uma pergunta</option>
                <option value="Qual é o nome do seu primeiro animal de estimação?">Qual é o nome do seu primeiro animal de estimação?</option>
                <option value="Qual é o nome da sua mãe?">Qual é o nome da sua mãe?</option>
                <option value="Qual foi o modelo do seu primeiro carro?">Qual foi o modelo do seu primeiro carro?</option>
                <option value="Qual é o nome da sua cidade natal?">Qual é o nome da sua cidade natal?</option>
                <option value="Qual é o nome do seu melhor amigo de infância?">Qual é o nome do seu melhor amigo de infância?</option>
            </select>
            <input type="text" name="resposta3" placeholder="Resposta" required>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
