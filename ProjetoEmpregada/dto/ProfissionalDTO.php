<?php
// CadastroProfissionalDTO.php

class ProfissionalDTO
{
    private $nome;
    private $email;
    private $telefone;
    private $endereco;
    private $servico;
    private $descricao;
    private $curriculo;

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setCurriculo($curriculo)
    {
        $this->curriculo = $curriculo;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getServico()
    {
        return $this->servico;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getCurriculo()
    {
        return $this->curriculo;
    }
}
