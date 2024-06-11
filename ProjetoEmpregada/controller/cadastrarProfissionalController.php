<?php
require_once '../dto/cadastrarProfissionalDTO.php';
require_once '../dao/cadastrarProfissionalDAO.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $servico = $_POST["servico"];
    $descricao = $_POST["descricao"];
    $senha = $_POST["senha"]; // Adiciona o campo senha
    
    // Salva o currículo em uma pasta específica (neste exemplo, assume-se que haja uma pasta chamada "curriculos" no mesmo diretório)
    $curriculo = $_FILES["curriculo"]["name"];
    $curriculo_tmp = $_FILES["curriculo"]["tmp_name"];
    move_uploaded_file($curriculo_tmp, "curriculos/" . $curriculo);

    // Cria um objeto CadastrarProfissionalDTO e define seus atributos
    $cadastrarProfissionalDTO = new CadastrarProfissionalDTO();
    $cadastrarProfissionalDTO->setNome($nome);
    $cadastrarProfissionalDTO->setSenha(password_hash($senha, PASSWORD_DEFAULT));
    $cadastrarProfissionalDTO->setCpf($cpf);
    $cadastrarProfissionalDTO->setEmail($email);
    $cadastrarProfissionalDTO->setTelefone($telefone);
    $cadastrarProfissionalDTO->setEndereco($endereco);
    $cadastrarProfissionalDTO->setServico($servico);
    $cadastrarProfissionalDTO->setDescricao($descricao);
    $cadastrarProfissionalDTO->setCurriculo($curriculo);
    

    // Cria um objeto ProfissionalDAO
    $cadastrarProfissionalDAO = new CadastrarProfissionalDAO();

    // Chama o método cadastrarProfissional() da classe cadastrarProfissionalDAO, passando o objeto CadastrarProfissionalDTO como argumento
    $ok = $cadastrarProfissionalDAO->cadastrarProfissional($cadastrarProfissionalDTO);

    // Verifica se o cadastro foi bem-sucedido
    if ($ok) {
        header("Location: ../view/formLoginProfissional.php");
    } else {
        header("Location: ../view/formCadastrarProfissional.php");
    }
    exit();
}

