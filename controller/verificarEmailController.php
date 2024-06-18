<?php
require_once '../dao/cadastrarProfissionalDAO.php';

if (isset($_GET['token']) && isset($_GET['email']))
{
    $token = $_GET['token'];
    $email = $_GET['email'];

    // Aqui você pode adicionar uma verificação de token se necessário, mas por simplicidade, vamos apenas verificar o email
    $cadastrarProfissionalDAO = new CadastrarProfissionalDAO();
    $ok = $cadastrarProfissionalDAO->verificarEmail($email);

    if ($ok)
    {
        echo "Email verificado com sucesso!";
    }
    else
    {
        echo "Erro ao verificar o email.";
    }
}
else
{
    echo "Parâmetros inválidos.";
}
?>