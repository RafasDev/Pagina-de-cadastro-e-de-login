<?php
require_once '../controller/LoginProfissionalController.php';

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Recupera os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $loginProfissionalController = new LoginProfissionalController();
    $profissional = $loginProfissionalController->login($email, $senha);

    if ($profissional)
    {
        // Credenciais corretas, iniciar sessão
        $_SESSION['profissional_id'] = $profissional['id'];
        $_SESSION['profissional_nome'] = $profissional['nome'];
        header("Location: ../index.php");
    }
    else
    {
        // Credenciais incorretas, redireciona para o login com mensagem de erro
        header("Location: ../formLoginProfissional.php?error=1");
    }
    exit();
}
