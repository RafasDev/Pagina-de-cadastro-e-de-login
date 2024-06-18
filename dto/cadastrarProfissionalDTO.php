<?php
// CadastroProfissionalDTO.php

class CadastrarProfissionalDTO
{
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $endereco;
    private $servico;
    private $descricao;
    private $curriculo;
    private $senha;

    // Métodos getters e setters para cada propriedade
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;
    }
    public function getServico()
    {
        return $this->servico;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setCurriculo($curriculo)
    {
        $this->curriculo = $curriculo;
    }
    public function getCurriculo()
    {
        return $this->curriculo;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }
}

