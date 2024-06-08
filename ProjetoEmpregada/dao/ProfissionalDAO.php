<?php
require_once "conexao/Conexao.php";

class ProfissionalDAO
{
    public function cadastrarProfissional(ProfissionalDTO $profissionalDTO)
    {
        try {
            $conexao = Conexao::getConnection();

            $nome = $profissionalDTO->getNome();
            $email = $profissionalDTO->getEmail();
            $telefone = $profissionalDTO->getTelefone();
            $endereco = $profissionalDTO->getEndereco();
            $servico = $profissionalDTO->getServico();
            $descricao = $profissionalDTO->getDescricao();
            $curriculo = $profissionalDTO->getCurriculo();

            $sql = "insert into profissional (nome, email, telefone, endereco, servico, descricao, curriculo) 
            values (:nome, :email, :telefone, :endereco, :servico, :descricao, :curriculo)";

            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':nome', $nome);
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
