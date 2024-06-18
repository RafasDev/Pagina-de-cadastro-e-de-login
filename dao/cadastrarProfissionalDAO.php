<?php
require_once "conexao/Conexao.php";

class CadastrarProfissionalDAO
{
    public function cadastrarProfissional(CadastrarProfissionalDTO $profissionalDTO)
    {
        try
        {
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

            // Verifica se o email ou CPF já existe no banco de dados
            $sql_check = "SELECT COUNT(*) FROM profissional WHERE email = :email OR cpf = :cpf";
            $stmt_check = $conexao->prepare($sql_check);
            $stmt_check->bindParam(':email', $email);
            $stmt_check->bindParam(':cpf', $cpf);
            $stmt_check->execute();
            $count = $stmt_check->fetchColumn();

            if ($count > 0)
            {
                // Email ou CPF já existe
                return false;
            }

            $sql = "INSERT INTO profissional (nome, senha, cpf, email, telefone, endereco, servico, descricao, curriculo, email_verificado) 
                    VALUES (:nome, :senha, :cpf, :email, :telefone, :endereco, :servico, :descricao, :curriculo, false)";

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
        }
        catch (PDOException $e)
        {
            // Captura qualquer exceção PDO
            echo "Erro ao inserir os dados: " . $e->getMessage();
            return false;
        }
    }

    public function verificarEmail($email)
    {
        try
        {
            $conexao = Conexao::getConnection();
            $sql = "UPDATE profissional SET email_verificado = TRUE WHERE email = :email";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return true;
        }
        catch (PDOException $e)
        {
            echo "Erro ao verificar o email: " . $e->getMessage();
            return false;
        }
    }
}
?>