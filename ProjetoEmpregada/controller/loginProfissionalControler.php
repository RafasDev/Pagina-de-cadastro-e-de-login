<?php
require_once '../dto/loginProfissionalDTO.php';
require_once '../dao/loginProfissionalDAO.php';

class LoginProfissionalController {
    public function login($email, $senha) {
        $loginProfissionalDTO = new LoginProfissionalDTO();
        $loginProfissionalDTO->setEmail($email);
        $loginProfissionalDTO->setSenha($senha);

        $loginProfissionalDAO = new LoginProfissionalDAO();
        return $loginProfissionalDAO->verificarCredenciais($loginProfissionalDTO);
    }
}
?>
