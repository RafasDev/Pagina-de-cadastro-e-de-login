<?php
require_once 'Conexao/Conexao.php';

class LoginProfissionalDAO {
    public function verificarCredenciais(LoginProfissionalDTO $loginProfissionalDTO) {
        $email = $loginProfissionalDTO->getEmail();
        $senha = $loginProfissionalDTO->getSenha();

        $conn = Conexao::getConnection();
        $stmt = $conn->prepare("SELECT id, nome, senha FROM profissional WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $profissional = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($profissional && password_verify($senha, $profissional['senha'])) {
            // Remove o hash da senha do array antes de retornar
            unset($profissional['senha']);
            return $profissional;
        } else {
            return false;
        }
    }
}
?>

