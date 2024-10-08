<?php
include_once("../services/databaseConnector.php");
session_start();


function submitRespostas() {
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $formNome = isset($_POST['Nome']) ? $_POST['Nome'] : '';
        $formTelefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
        $formAno = isset($_POST['ano']) ? $_POST['ano'] : '';
        $formResposta1 = isset($_POST['option1']) ? $_POST['option1'] : '';
        $formResposta2 = isset($_POST['option2']) ? $_POST['option2'] : '';
        

        if (isset($GLOBALS['conexao'])) {
 
            $stmt = mysqli_prepare($GLOBALS['conexao'], "INSERT INTO alunos_respostas (nome, telefone, ano, resposta1, resposta2) VALUES (?, ?, ?, ?, ?)");
            
           
            mysqli_stmt_bind_param($stmt, "sssss", $formNome, $formTelefone, $formAno, $formResposta1, $formResposta2);
            
           
            mysqli_stmt_execute($stmt);
            
           
            mysqli_stmt_close($stmt);
        } else {

            echo "Conexão com o banco de dados não disponível.";
        }
    }
}

submitRespostas();

session_abort()

/*
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
        <h2 class="text-lg leading-6 font-medium text-black-900 ml-8 flex "> Users <h2> Seja Bem-vindo </h2>
        <form action="login.php" method="POST">
            <button class="mr-8 flex "> Log Out </button>
            </form>
        </div>
</nav>


<?php
$sql = "SELECT * FROM alunos_respostas";
$resultado = mysqli_query($conexao, $sql);

?>

<div class="mt-6">
    <table class="table-fixed w-full ">
        <thead  class="bg-purple-200 justify-between items-center">
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Telefone</th>
            <th scope="col">R:1</th>
            <th scope="col">R:2</th>

        </tr>
        </thead>
        <tbody class="w-full divide-y divide-gray-500 justify-between items-center ">
            <?php
                while($user_data = mysqli_fetch_assoc($resultado))    
                {
                    echo"<tr>";
                    echo "<td>". $user_data['id']."</td>";
                    echo "<td>". $user_data['nome']."</td>";
                    echo "<td>". $user_data['ano']."</td>";
                    echo "<td>". $user_data['telefone']."</td>";
                    echo "<td>". $user_data['resposta1']."</td>";
                    echo "<td>". $user_data['resposta2']."</td>";
                    echo "</tr>";
                }        
            ?>
        </tbody>
    </table>
</div>

</body>

</html>