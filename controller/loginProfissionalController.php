<?php
// Requer as dependências necessárias
require_once '../dto/loginProfissionalDTO.php';
require_once '../dao/loginProfissionalDAO.php';

class LoginProfissionalController
{
    public function login($email, $senha)
    {
        $loginProfissionalDTO = new LoginProfissionalDTO();
        $loginProfissionalDTO->setEmail($email);
        $loginProfissionalDTO->setSenha($senha);

        $loginProfissionalDAO = new LoginProfissionalDAO();
        return $loginProfissionalDAO->verificarCredenciais($loginProfissionalDTO);
    }
}

// Inicia a sessão
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
        header("Location: ../view/formLoginProfissional.php?error=1");
    }
    exit();
}
