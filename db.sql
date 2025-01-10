-- Criando base
CREATE DATABASE XXXXXX;

-- Usando base
USE XXXXXX;

-- Criando tabela dentro da base
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    senha VARCHAR(255),
    pergunta1 VARCHAR(255),
    resposta1 VARCHAR(255),
    pergunta2 VARCHAR(255),
    resposta2 VARCHAR(255),
    pergunta3 VARCHAR(255),
    resposta3 VARCHAR(255)
);

-- Criando tabela dentro da base
CREATE TABLE vendedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    senha VARCHAR(255),
    pergunta1 VARCHAR(255),
    resposta1 VARCHAR(255),
    pergunta2 VARCHAR(255),
    resposta2 VARCHAR(255),
    pergunta3 VARCHAR(255),
    resposta3 VARCHAR(255),
    cpf_cnpj VARCHAR(255),
    dados_bancarios TEXT
);