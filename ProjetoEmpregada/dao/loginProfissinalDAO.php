<?php
require_once 'Conexao.php';

class LoginProfissionalDAO {
    public function verificarCredenciais(LoginProfissionalDTO $loginProfissionalDTO) {
        $email = $loginProfissionalDTO->getEmail();
        $senha = $loginProfissionalDTO->getSenha();

        $conn = Conexao::getConnection();
        $stmt = $conn->prepare("SELECT senha FROM profissionais WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $profissional = $stmt->fetch();

        if ($profissional && password_verify($senha, $profissional['senha'])) {
            return $profissional;
        } else {
            return false;
        }
    }
}
?>
