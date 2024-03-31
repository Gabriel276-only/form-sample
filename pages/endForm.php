<?php


/*include("../services/databaseConnector.php");
//$conexao = mysqli_connect('localhost', 'root', '@Cartoon10*', 'forms');

if(isset($_POST['submit'])){
print_r('nome: ' . $_POST['nome']);
print_r('<br>');
print_r('email: ' . $_POST['email']);
print_r('<br>');
print_r('data de entrada: ' . $_POST['data_entrada']);
print_r('<br>');
print_r(('resposta 1: ' . $_POST['option1']));
print_r('<br>');
print_r(('resposta 2: ' . $_POST['option2']));
print_r('<br>');
print_r('telefone: ' . $_POST['telefone']);
print_r('<br>');
print_r('ano: ' . $_POST['ano']);
print_r('senha: ' . $_POST['senha']);

$_SESSION['nome'] = (string)$_POST['nome'];
$_SESSION['email'] = (string)$_POST['email'];
$_SESSION['data_entrada'] = (string)$_POST['data_entrada'];
$_SESSION['telefone'] = (string)$_POST['telefone'];
$_SESSION['option1'] = (string)$_POST['option1'];
$_SESSION['option2'] = (string)$_POST['option2'];
$_SESSION['ano'] = (string)$_POST['ano'];



/*$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['ano'];
$data2 = $_POST['data_entrada'];
$resposta1 = $_POST['option1'];
$resposta2 = $_POST['option2'];
$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,ano,telefone,resposta1,resposta2) VALUES ($nome, $email,$senha, $telefone,  $data, $ano, $resposta1, $resposta2)");

}

if (mysqli_query($conexao, $result)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conexao);
}

// Fechar a conexão
mysqli_close($conexao);
*/
?>


<!DOCTYPE html>
<html lang="pt-BR" <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../dist/style.css">
</head>

<body>
   
<nav class="bg-purple-300 pt-6 shadow pb-6 mx-4 rounded-b-2xl">
        <div class="flex flex-row justify-between items-center  ">
            <h2 class="text-lg leading-6 font-medium text-black-900 ml-8 flex "> Users </h2>
            <form action="login.php" method="POST">
            <button class="mr-8 flex "> Log Out</button>
            </form>
        </div>
</nav>



<div class="mt-6">
    <table class="w-full divide-y divide-gray-500 ">
        <thead class="bg-purple-200">
            <tr>
                <th class=" px-6 py-3 text-center text-xs font-medium text-grady-500 uppercase tracking-wider">Nome</th>
                <th class=" px-6 py-3 text-center text-xs font-medium text-grady-500 uppercase tracking-wider">Email</th>
                <th class=" px-6 py-3 text-center text-xs font-medium text-grady-500 uppercase tracking-wider"> Data</th>
                <th class=" px-6 py-3 text-center text-xs font-medium text-grady-500 uppercase tracking-wider"> WhatsApp</th>
                <th class=" px-6 py-3 text-center text-xs font-medium text-grady-500 uppercase tracking-wider"> Resposta 1</th>
                <th class=" px-6 py-3 text-center text-xs font-medium text-grady-500 uppercase tracking-wider"> Resposta 2</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 ">
            <tr class="py-6 text-sm font-medium text-gray-900 whitespace-nowrap justify-center text-center w-full">
                <td> Gabriel </td>
                <td>gabrielmagaborges@gmail.com</td>
                <td>2024</td>
                <td>24 99999-9999</td>
            </tr>
        </tbody>
    </table>
</div>
    </nav>
    
</body>

</html>