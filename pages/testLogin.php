<?php
include_once("../services/databaseConnector.php");
session_start()

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{
    $formEmail = $_POST('email');
    $formSenha = $_POST('senha');

      $sql = "SELECT * FROM alunos where aluno_email = '$formEmail' and aluno_senha = '$formSenha'";
      $result = $conexao-> query($sql);

      if(mysqli_num_rows($result) < 1){
        header("location:sistema.php");
      }

else{
    header("location:login.php");
}
}
?>