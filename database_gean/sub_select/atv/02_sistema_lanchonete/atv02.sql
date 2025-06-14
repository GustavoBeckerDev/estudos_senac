-- SISTEMA DE PEDIDOS DE UMA LANCHONETE

-- CLIENTES, PRODUTOS, PEDIDOS, ITENS PEDIDOS:
-- A) Mostrar os produtos e quantidades de um pedido específico:
-- B) Mostrar o nome do cliente e a data do pedido:
-- C) Calcular o valor total de um pedido específico:
-- D) Calcular quanto cada cliente já gastou no total:
-- E) Listar todos os produtos comprados por um cliente específico:
-- F) Quantas vezes cada produto foi vendido:
-- G) Listas os pedidos feitos em determinada data com nome do cliente:
-- H) Listar os pedidos que contêm um produto específico (ex: batata frita):
-- I) Calcular o ticket médio por cliente:
-- J) Listar todos os clientes que já compraram 'X-BURGUER':
-- K) Valor total vendido por produto (nome, total em R$):
-- L) Cliente que fizeram mais de um pedido:
-- M) Mostrar todos os pedidos com: nome do cliente, total do pedido, data:
-- N) Listar os 3 produtos mais vendidos (em quantidade):

-- CREATE TABLE --

create table cliente (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL);

create table produto (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL);

create table pedidos (
id INT PRIMARY KEY AUTO_INCREMENT,
cliente_id INT(3) NOT NULL,
valor_total DECIMAL(10,3) NOT NULL,

FOREIGN KEY (cliente_id) REFERENCES cliente(id));

create table itens_pedido (
id INT PRIMARY KEY AUTO_INCREMENT,
produto_id INT(3) NOT NULL,
pedidos_id INT(3) NOT NULL,
valor_uni DECIMAL(10,3) NOT NULL,
quantidade INT NOT NULL,

FOREIGN KEY (produto_id) REFERENCES produto(id),
FOREIGN KEY (pedidos_id) REFERENCES pedidos(id)); 

-- INSERT INTO --

insert into cliente (nome, email) values
('gustavo', 'gustavo@email.com'),
('marcela', 'marcela@email.com'),
('camila', 'camila@email.com'),
('pedro', 'pedro@email.com');

insert into produto (nome) values
('batata frita'),
('x-burguer'),
('hot-dog'),
('coca-cola'),
('guarana'),
('onion rings');

insert into pedidos (cliente_id, valor_total) values
(1, 100.00),
(1, 80.00),
(1, 120.00),
(2, 100.00),
(2, 200.00),
(3, 50.00),
(3, 120.00),
(4, 75.00),
(4, 120.00);

insert into itens_pedido (produto_id, pedidos_id, valor_uni, quantidade) values
(1, 1, 50.00, 2), -- BATATA FRITA, PEDIDO 1, 50,OO REAIS CADA, 2 QUANTIDADE
(2, 2, 40.00, 2),
(6, 3, 60.00, 2),
(3, 5, 25.00, 4),
(2, 4, 50.00, 2),
(4, 6, 5.00, 10),
(5, 7, 12.00, 10),
(3, 8, 25.00, 3),
(1, 9, 40.00, 3);

-- SUB SELECT -- 

-- A) Mostrar os produtos e quantidades de um pedido específico:

select 














