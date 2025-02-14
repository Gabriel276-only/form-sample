<?php
include_once("../services/databaseConnector.php");
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $formEmail = trim($_POST['email']);
    $formSenha = $_POST['senha'];

    $conexao = $GLOBALS['conexao'];

    if ($conexao) {
        // Buscar usuário pelo e-mail
        $stmt = $conexao->prepare("SELECT aluno_senha FROM alunos WHERE aluno_email = ?");
        $stmt->bind_param("s", $formEmail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {
            // Verificar senha
            if (password_verify($formSenha, $user['aluno_senha'])) {
                $_SESSION['email'] = $formEmail;
                header("Location: sistema.php"); // Login bem-sucedido
                exit;
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "Usuário não encontrado!";
        }
    } else {
        echo "Erro na conexão com o banco de dados.";
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
