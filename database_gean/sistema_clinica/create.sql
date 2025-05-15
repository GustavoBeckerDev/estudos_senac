-- PARTE 01 : MODELAGEM E CRIAÇÃO DE TABELAS.

create table clinica_clientes (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
telefone VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
cidade VARCHAR(100) NOT NULL,
uf VARCHAR(100) NOT NULL
);

create table clinica_funcionarios (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
telefone VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL);

create table clinica_produtos (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
quantidade INT(4) NOT NULL);

create table clinica_vendas (
id INT PRIMARY KEY AUTO_INCREMENT,
cliente_id INT ,
funcionario_id INT,
produto_id INT,
valor DECIMAL(8,2) NOT NULL,
quantidade INT(4) NOT NULL,
data_venda DATETIME NOT NULL,

FOREIGN KEY (cliente_id) REFERENCES clinica_clientes(id),
FOREIGN KEY (funcionario_id) REFERENCES clinica_funcionarios(id),
FOREIGN KEY (produto_id) REFERENCES clinica_produtos(id)
);

create table clinica_agendamentos (
id INT PRIMARY KEY AUTO_INCREMENT,
cliente_id INT,
funcionario_id INT,
servico VARCHAR(100) NOT NULL,
valor DECIMAL(8,2) NOT NULL,
data_marcada DATETIME NOT NULL,

FOREIGN KEY (cliente_id) REFERENCES clinica_clientes(id),
FOREIGN KEY (funcionario_id) REFERENCES clinica_funcionarios(id)
);
