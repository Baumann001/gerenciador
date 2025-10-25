CREATE DATABASE gerenciamento;
USE gerenciamento;

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(200) NOT NULL UNIQUE
);

CREATE TABLE tarefa (
    id_tarefa INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    nome VARCHAR(200) NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    nome_setor VARCHAR(50) NOT NULL,
    prioridade ENUM('baixa','media','alta') NOT NULL,
    data_cadastro DATETIME NOT NULL,
    status_tarefa ENUM('a fazer', 'fazendo', 'pronto'),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);
