-- CRIA TABELA COM ID, NOME, EMAIL

create table dbg1_clientes(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
email VARCHAR(100)
);

create table dbg1_enderecos(
id INT AUTO_INCREMENT PRIMARY KEY,
cliente_id INT,
rua VARCHAR(100) NOT NULL,
cidade VARCHAR(1000) NOT NULL, 
uf VARCHAR(2) NOT NULL,
cep VARCHAR(10) NOT NULL,
FOREIGN KEY (cliente_id) REFERENCES dbg1_clientes(id)
);
