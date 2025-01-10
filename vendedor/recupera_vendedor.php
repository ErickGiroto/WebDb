<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha - Usuário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="recupera_vendedor_processa.php" method="POST">
            <h2>Recuperação de Senha - Usuário</h2>
            <input type="email" name="email" placeholder="E-mail" required>
            <label for="resposta1">Resposta para a Pergunta 1</label>
            <input type="text" name="resposta1" required>
            <label for="resposta2">Resposta para a Pergunta 2</label>
            <input type="text" name="resposta2" required>
            <label for="resposta3">Resposta para a Pergunta 3</label>
            <input type="text" name="resposta3" required>
            <button type="submit">Recuperar Senha</button>
        </form>
    </div>
</body>
</html>