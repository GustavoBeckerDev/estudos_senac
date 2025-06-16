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

create database sistema_lanchonete;
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
data_pedido date not null,

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

insert into pedidos (cliente_id, valor_total, data_pedido) values
(1, 100.00, "2025-05-01"),
(1, 80.00, "2025-05-01"),
(1, 120.00, "2025-05-02"),
(2, 100.00, "2025-05-02"),
(2, 200.00, "2025-05-02"),
(3, 50.00, "2025-05-03"),
(3, 120.00, "2025-05-03"),
(4, 75.00, "2025-05-04"),
(4, 120.00, "2025-05-04");

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

select ip.id as "Nº do pedido:", 
ip.quantidade, 
pro.nome as "Nome do produto"
from itens_pedido ip, pedidos ped, produto pro
where ip.produto_id = pro.id
and ip.pedidos_id = ped.id
and ip.id = 1;

-- B) Mostrar o nome do cliente e a data do pedido:

select cli.nome as "Nome cliente:", ped.data_pedido as "Data do pedido:"
from cliente cli, pedidos ped
where ped.cliente_id = cli.id;

-- C) Calcular o valor total de um pedido específico:

select ped.id as "Nº do pedido:",
pro.nome as "Nome do produto: ",
ip.quantidade as "Quantidade: ",
ip.valor_uni as "Valor Unitário: ",
(ip.quantidade * ip.valor_uni) as "Valor total: "
from itens_pedido ip, pedidos ped, produto pro
where ip.pedidos_id = ped.id
and ip.produto_id = pro.id
and ped.id = 1; 
-- OBS: RESOLVI MOSTRAR O ID DO PRODUTO E O NOME PARA FICAR MAIS CLARA A CONSULTA.

-- D) Calcular quanto cada cliente já gastou no total:

select cli.nome as "Cliente:", 
sum(ped.valor_total) as "Total gasto"
from cliente cli, pedidos ped
where ped.cliente_id = cli.id
group by cli.id, cli.nome;

-- E) Listar todos os produtos comprados por um cliente específico:

select cli.nome as "Cliente:", 
pro.nome as "Produto comprado:"
from cliente cli, pedidos ped, produto pro, itens_pedido ip
where ped.cliente_id = cli.id
and ip.pedidos_id = ped.id
and ip.produto_id = pro.id
and cli.id = 1
group by cli.id, cli.nome, pro.id, pro.nome;

-- F) Quantas vezes cada produto foi vendido:

select SUM(quantidade) as "Total vendido: ", 
pro.nome as "Nome do produto: " 
from itens_pedido ip, produto pro
where ip.produto_id = pro.id 
group by ip.produto_id, pro.nome;

-- G) Listas os pedidos feitos em determinada data com nome do cliente:

select ped.id as "ID do pedido",
ped.data_pedido as "Data do pedido", 
ped.valor_total as "Valor total do pedido",
cli.nome as "Nome do cliente"
from pedidos ped, cliente cli
where ped.cliente_id = cli.id
and ped.data_pedido = "2025-05-01";

-- H) Listar os pedidos que contêm um produto específico (ex: batata frita):

select ped.id as "ID do pedido",
ped.data_pedido as "Data do pedido",
pro.nome as "Produto"
from pedidos ped, produto pro, itens_pedido ip
where ip.pedidos_id = ped.id
and ip.produto_id = pro.id
and pro.nome = "batata frita";

-- I) Calcular o ticket médio por cliente:

select cli.nome as "Cliente",
sum(ped.valor_total) as "Total gasto",
count(ped.id) as "Numero de pedidos",
sum(ped.valor_total) / count(ped.id) as "Ticket médio"
from cliente cli, pedidos ped
where ped.cliente_id = cli.id
group by cli.nome;

-- J) Listar todos os clientes que já compraram 'X-BURGUER':

select cli.nome as "Cliente",
pro.nome as "Produto"
from pedidos ped, produto pro, itens_pedido ip, cliente cli
where ip.pedidos_id = ped.id
and ip.produto_id = pro.id
and ped.cliente_id = cli.id
and pro.nome = "x-burguer";

-- K) Valor total vendido por produto (nome, total em R$):

select pro.nome as "Produto",
sum(ped.valor_total) as "Total em R$"
from produto pro, pedidos ped, itens_pedido ip
where ip.produto_id = pro.id
and ip.pedidos_id = ped.id
group by pro.nome;

-- L) Cliente que fizeram mais de um pedido:

select cli.nome as "Cliente",
count(ped.id) as "Nº de pedidos"
from cliente cli, pedidos ped
where ped.cliente_id = cli.id
group by cli.nome
having count(ped.id) > 1
order by "Nº de pedidos" DESC;

-- M) Mostrar todos os pedidos com: nome do cliente, total do pedido, data:

select ped.id as "ID do pedido",
cli.nome as "Cliente",
ped.valor_total as "Total gasto",
ped.data_pedido as "Data do pedido"
from cliente cli, pedidos ped
where ped.cliente_id = cli.id;

-- N) Listar os 3 produtos mais vendidos (em quantidade):

select pro.nome as "Produto",
sum(ip.quantidade) as "Quantidade total vendida"
from produto pro, itens_pedido ip
where ip.produto_id = pro.id
group by pro.nome
order by sum(ip.quantidade) desc
limit 3;