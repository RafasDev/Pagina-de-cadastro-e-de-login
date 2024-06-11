CREATE database projeto_empregada;/* Caso não tenha criado ainda o banco de dados */


CREATE TABLE profissional (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cpf bigint(11) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    servico VARCHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    curriculo VARCHAR(255) NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);