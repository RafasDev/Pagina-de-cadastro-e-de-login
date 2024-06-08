<?php
require_once '../dto/ProfissionalDTO.php';
require_once '../dao/ProfissionalDAO.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $servico = $_POST["servico"];
    $descricao = $_POST["descricao"];
    // Salva o currículo em uma pasta específica (neste exemplo, assume-se que haja uma pasta chamada "curriculos" no mesmo diretório)
    $curriculo = $_FILES["curriculo"]["name"];
    $curriculo_tmp = $_FILES["curriculo"]["tmp_name"];
    move_uploaded_file($curriculo_tmp, "curriculos/" . $curriculo);

    // Cria um objeto ProfissionalDTO e define seus atributos
    $profissionalDTO = new ProfissionalDTO();
    $profissionalDTO->setNome($nome);
    $profissionalDTO->setEmail($email);
    $profissionalDTO->setTelefone($telefone);
    $profissionalDTO->setEndereco($endereco);
    $profissionalDTO->setServico($servico);
    $profissionalDTO->setDescricao($descricao);
    $profissionalDTO->setCurriculo($curriculo);

    // Cria um objeto ProfissionalDAO
    $profissionalDAO = new ProfissionalDAO();

    // Chama o método cadastrarProfissional() da classe ProfissionalDAO, passando o objeto ProfissionalDTO como argumento
    $ok = $profissionalDAO->cadastrarProfissional($profissionalDTO);

    // Verifica se o cadastro foi bem-sucedido
    if ($ok) {
        header("Location: ../index.php");
    } else {
        header("Location: ../view/formCadastrarProfissional.php");
    }
    exit();
}
