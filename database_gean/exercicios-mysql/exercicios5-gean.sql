CREATE TABLE produtos (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
categoria VARCHAR(50) NOT NULL,
preco DECIMAL(10,2),
estoque INT NOT NULL, 
fornecedor VARCHAR(100) NOT NULL,
data_validade TIMESTAMP default current_timestamp,
peso DECIMAL(5,2),
situacao boolean default true,
descricao TEXT);





