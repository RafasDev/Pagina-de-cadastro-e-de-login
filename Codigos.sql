CREATE database projeto_profissional;


CREATE TABLE profissional (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email UNIQUE VARCHAR(100) NOT NULL,
    cpf UNIQUE BIGINT(11) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    servico VARCHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    curriculo VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    email_verificado BOOLEAN DEFAULT FALSE;
);
