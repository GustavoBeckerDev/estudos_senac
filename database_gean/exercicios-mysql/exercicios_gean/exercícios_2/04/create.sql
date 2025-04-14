create table fornecedores (
id INT PRIMARY KEY AUTO_INCREMENT,
empresa VARCHAR(100) NOT NULL,
cidade VARCHAR(100) NOT NULL,
uf VARCHAR(2) NOT NULL);

create table produtos (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
categoria VARCHAR(50) NOT NULL,
id_fornecedor INT,
FOREIGN KEY (id_fornecedor) REFERENCES fornecedores (id));