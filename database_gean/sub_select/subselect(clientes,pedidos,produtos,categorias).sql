
-- Criação das tabelas

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50)
);

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(50)
);

CREATE TABLE produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(100),
    preco DECIMAL(10, 2),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_produto INT,
    quantidade INT,
    valor DECIMAL(10, 2),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto)
);

-- Inserção de categorias
INSERT INTO categorias (nome_categoria) VALUES
('Eletrônicos'),
('Roupas'),
('Alimentos');

-- Inserção de produtos
INSERT INTO produtos (nome_produto, preco, id_categoria) VALUES
('Smartphone', 2000.00, 1),
('Notebook', 3500.00, 1),
('Camiseta', 60.00, 2),
('Calça Jeans', 150.00, 2),
('Arroz 5kg', 30.00, 3),
('Chocolate 200g', 10.00, 3);

-- Inserção de clientes
INSERT INTO clientes (nome) VALUES
('Ana Paula'),
('Bruno Souza'),
('Carlos Mendes'),
('Débora Lima');

-- Inserção de pedidos
INSERT INTO pedidos (id_cliente, id_produto, quantidade, valor) VALUES
(1, 1, 1, 2000.00),  -- Ana Paula comprou 1 Smartphone
(1, 3, 2, 120.00),   -- Ana Paula comprou 2 Camisetas
(2, 2, 1, 3500.00),  -- Bruno comprou 1 Notebook
(3, 4, 1, 150.00),   -- Carlos comprou 1 Calça Jeans
(4, 5, 3, 90.00),    -- Débora comprou 3 pacotes de Arroz
(4, 6, 5, 50.00);    -- Débora comprou 5 Chocolates

-- LISTAR CLIENTES COM MAIS DE 1 PEDIDO FEITO

select nome
from clientes
where id_cliente in
(select id_cliente from pedidos
group by id_cliente 
having count(*)>1);

-- LISTAR CLIENTES QUE NÃO TEM PEDIDOS

select nome
from clientes C
where not exists (select 1 from pedidos P where P.id_cliente = C.id_cliente)
