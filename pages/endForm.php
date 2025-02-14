<?php
include_once("../services/databaseConnector.php");
session_start();

function submitRespostas() {
    global $conexao; // Usa a conexão global do arquivo importado

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $formNome = $_POST['Nome'] ?? '';
        $formTelefone = $_POST['telefone'] ?? '';
        $formAno = $_POST['ano'] ?? '';
        $formResposta1 = $_POST['option1'] ?? '';
        $formResposta2 = $_POST['option2'] ?? '';

        if ($conexao) {
            $stmt = mysqli_prepare($conexao, "INSERT INTO alunos_respostas (nome, telefone, ano, resposta1, resposta2) VALUES (?, ?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sssss", $formNome, $formTelefone, $formAno, $formResposta1, $formResposta2);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        } else {
            echo "Erro na conexão com o banco de dados.";
        }
    }
}

submitRespostas();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
    <link rel="stylesheet" href="../dist/style.css">
</head>
<body>
   
<nav class="bg-purple-300 pt-6 shadow pb-6 mx-4 rounded-b-2xl">
    <div class="flex flex-row justify-between items-center">
        <h2 class="text-lg leading-6 font-medium text-black-900 ml-8">Users - Seja Bem-vindo</h2>
        <form action="login.php" method="POST">
            <button class="mr-8 flex">Log Out</button>
        </form>
    </div>
</nav>

<?php
$sql = "SELECT * FROM alunos_respostas";
$resultado = mysqli_query($conexao, $sql);
?>

<div class="mt-6">
    <table class="table-fixed w-full">
        <thead class="bg-purple-200">
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Ano</th>
                <th>Telefone</th>
                <th>Resposta 1</th>
                <th>Resposta 2</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-500">
            <?php while ($user_data = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    <td><?= htmlspecialchars($user_data['id']) ?></td>
                    <td><?= htmlspecialchars($user_data['nome']) ?></td>
                    <td><?= htmlspecialchars($user_data['ano']) ?></td>
                    <td><?= htmlspecialchars($user_data['telefone']) ?></td>
                    <td><?= htmlspecialchars($user_data['resposta1']) ?></td>
                    <td><?= htmlspecialchars($user_data['resposta2']) ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php mysqli_close($conexao); ?>

</body>
</html>
