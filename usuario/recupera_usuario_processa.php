<?php
$conn = new mysqli("localhost", "root", "root", "marketplace");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $resposta1 = $_POST['resposta1'];
    $resposta2 = $_POST['resposta2'];
    $resposta3 = $_POST['resposta3'];

    $stmt = $conn->prepare("SELECT resposta1, resposta2, resposta3 FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($resposta1_hash, $resposta2_hash, $resposta3_hash);
    $stmt->fetch();

    if (password_verify($resposta1, $resposta1_hash) && password_verify($resposta2, $resposta2_hash) && password_verify($resposta3, $resposta3_hash)) {
        echo "<form action='nova_senha.php' method='POST'>
                <h2>Nova Senha</h2>
                <input type='hidden' name='email' value='$email'>
                <input type='password' name='nova_senha' placeholder='Nova Senha' required>
                <button type='submit'>Alterar Senha</button>
              </form>";
    } else {
        echo "Respostas incorretas. <a href='recupera_usuario.php'>Tente novamente</a>";
    }

    $stmt->close();
}
$conn->close();
?>
