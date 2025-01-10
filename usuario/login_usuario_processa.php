<?php
session_start();
$conn = new mysqli("localhost", "root", "root", "marketplace");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT id, nome_completo, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nome_completo, $senha_hash);
        $stmt->fetch();

        if (password_verify($senha, $senha_hash)) {
            $_SESSION['usuario_id'] = $id;
            $_SESSION['nome_usuario'] = $nome_completo;
            header("Location: portal_usuario.html");
            exit;
        } else {
            echo "Senha incorreta. <a href='login_usuario.php'>Tente novamente</a>";
        }
    } else {
        echo "E-mail não encontrado. <a href='login_usuario.php'>Tente novamente</a>";
    }

    $stmt->close();
}
$conn->close();
?>
