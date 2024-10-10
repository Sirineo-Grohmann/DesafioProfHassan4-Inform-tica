CREATE DATABASE IF NOT EXISTS cadastro_has
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

-- Seleciona o banco de dados
USE cadastro_has;

-- Criação das tabelas

CREATE TABLE IF NOT EXISTS TB_cadastro (
    cad_codigo INT AUTO_INCREMENT PRIMARY KEY,
    cad_nome VARCHAR(255) NOT NULL,
    cad_sobrenome VARCHAR(255) NOT NULL,
    cad_email VARCHAR(255) NOT NULL,
    cad_telefone VARCHAR(255) NOT NULL,
    cad_data_nasc VARCHAR(255) NOT NULL,
    cad_senha VARCHAR(255) NOT NULL
);