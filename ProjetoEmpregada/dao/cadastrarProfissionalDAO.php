<?php
require_once "conexao/Conexao.php";

class CadastrarProfissionalDAO
{
    public function cadastrarProfissional(CadastrarProfissionalDTO $profissionalDTO)
    {
        try {
            $conexao = Conexao::getConnection();

            $nome = $profissionalDTO->getNome();
            $senha = $profissionalDTO->getSenha();
            $cpf = $profissionalDTO->getCpf();
            $email = $profissionalDTO->getEmail();
            $telefone = $profissionalDTO->getTelefone();
            $endereco = $profissionalDTO->getEndereco();
            $servico = $profissionalDTO->getServico();
            $descricao = $profissionalDTO->getDescricao();
            $curriculo = $profissionalDTO->getCurriculo();

            $sql = "insert into profissional (nome, senha, cpf, email, telefone, endereco, servico, descricao, curriculo) 
            values (:nome, :senha, :cpf, :email, :telefone, :endereco, :servico, :descricao, :curriculo)";

            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':servico', $servico);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':curriculo', $curriculo);
            
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            // Captura qualquer exceção PDO
            echo "Erro ao inserir os dados: " . $e->getMessage();
            return false;
        }
    }
}
