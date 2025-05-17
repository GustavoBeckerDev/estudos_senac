CREATE TABLE fornecedor (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_fornecedor VARCHAR(100)
);

CREATE TABLE produto (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_produto VARCHAR(100),
  id_fornecedor INT
);

-- fornecedores

INSERT INTO fornecedor (nome_fornecedor) VALUES
('TechSupply'),
('Comercial Brasil'),
('Logística Alfa');

-- produtos

INSERT INTO produto (nome_produto, id_fornecedor) VALUES
('Monitor 27"', 1),
('Cabo HDMI', 2),
('Notebook Gamer', 3);

-- Retorne >>> Nome do Produto e nome do fornecedor

select nome_produto,
(select nome_fornecedor from fornecedor where fornecedor.id = produto.id_fornecedor) as "produto e fornecedor"
from produto
