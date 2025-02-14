<?php
include_once("../services/databaseConnector.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $formEmail = trim($_POST['email']);
    $formSenha = $_POST['senha'];

    if (!empty($formEmail) && !empty($formSenha)) {
        if ($conexao) {
            // Buscar usuário pelo e-mail
            $stmt = $conexao->prepare("SELECT aluno_email, aluno_senha FROM alunos WHERE aluno_email = ?");
            $stmt->bind_param("s", $formEmail);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($user = $result->fetch_assoc()) {
                // Verifica a senha
                if (password_verify($formSenha, $user['aluno_senha'])) {
                    $_SESSION['email'] = $formEmail;
                    header("Location: enform.php"); // Usuário existente e senha correta
                    exit;
                } else {
                    $erro = "Senha incorreta!";
                }
            } else {
                // Usuário novo, redireciona para forms.php
                header("Location: forms.php");
                exit;
            }
            $stmt->close();
        } else {
            $erro = "Erro na conexão com o banco de dados.";
        }
    } else {
        $erro = "Preencha todos os campos!";
    }
}

$conexao->close();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../dist/style.css">
</head>

<body>
    <form action="forms.php" method="POST">
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-300 to-indigo-700">
        <div class="relative flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 ">
            <div class="flex flex-col justify-center p-8 md:p-14">

                <span class="mb-3 font-bold text-4xl pl-6px  flex justify-center mt-4 pb-2 ">Faça Seu Login</span>


                <div class=" m-5 mb-4 flex flex-col py-4">
                    <span class="mb-2 text-md ">Email</span>
                    <input  id=" email"class=" w-full border border-gray-300 hover:bg-gray-200 rounded-md  p-2 " type="text" name="email" placeholder="Email" required><br>
                    <span class="mb-2 text-md ">Senha</span>
                    <input  id="senha" class=" w-full border border-gray-300 hover:bg-gray-200 rounded-md  p-2 " type="password" name="senha" placeholder="Senha" required ><br>


                    <button type="submit" name="submit" value="enviar" class="bg-gradient-to-r from-blue-600 to-indigo-800 hover:from-green-500 hover:to-blue-600 text-white font-bold py-2 px-4 rounded flex text-center justify-center "> Enviar</button>
                  </form> 

                    <!--<h1> Ainda não tem um login?</h1>
                    <a href= "cadastro.php"  class=" bg-blue-600 text-white font-bold py-2 px-4 rounded flex text-center justify-center m-2 "> Cadastre-se</a>
                </div>-->

        </div>
    </div>
    
</body>

</html>