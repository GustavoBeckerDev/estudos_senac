-- ATIVIDADES 02 GUSTAVO BECKER - JOVEM PROGRAMADOR NOTURNO (09/04)

-- CREATE / DROP

create table atv_clientes (
id_cliente INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(80) NOT NULL,
cidade VARCHAR(50) NOT NULL,
uf VARCHAR(10) NOT NULL,
endereco VARCHAR(100) NOT NULL);

create table atv_vendas (
id_venda INT PRIMARY KEY AUTO_INCREMENT,
data_venda DATE,
id_cliente INT,
id_produto INT,
id_vendedor INT,
FOREIGN KEY (id_cliente) REFERENCES atv_clientes(id_cliente),
FOREIGN KEY (id_produto) REFERENCES atv_produtos(id_produto),
FOREIGN KEY (id_vendedor) REFERENCES atv_vendedores(id_vendedor));

create table atv_produtos (
id_produto INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
categoria VARCHAR(100) NOT NULL);

create table atv_vendedores (
id_vendedor INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL);

drop table atv_clientes;
drop table atv_produtos;
drop table atv_vendedores;
drop table atv_vendas;

-- -------------------------
-- INSERT

insert into atv_clientes (nome, cidade, uf, endereco) values
("jonas", "sao paulo", "sp", "avenida paulista 45"),
("mario", "rio de janeiro", "rj", "rua da luz 550"),
("joao", "belo horizonte", "mg", "rua do centenario 1929"),
("paulo", "itajai", "sc", "rua brusque 998"),
("maria", "videira", "sc", "rua sao paulo 90");

insert into atv_produtos (nome, categoria) values
("mouse", "perifericos"),
("ssd sata", "hardware"),
("teclado", "perifericos"),
("fonte 500w", "hardware"),
("headset", "perifericos");

insert into atv_vendedores(nome) values
("ana paula"),
("maria angela"),
("paulo ramos");

insert into atv_vendas(data_venda,id_cliente, id_produto, id_vendedor) values
('2025-04-01', 1, 1, 1),
('2025-04-01', 1, 3, 1),
('2025-04-01', 2, 5, 2),
('2025-04-01', 3, 2, 3),
('2025-04-01', 5, 1, 1),
('2025-04-02', 4, 3, 2),
('2025-04-02', 1, 3, 3),
('2025-04-02', 4, 5, 1),
('2025-04-02', 3, 2, 3),
('2025-04-02', 5, 4, 2);

-- ------------------------
-- SELECT 

select * from atv_clientes;
select * from atv_produtos;
select * from atv_vendedores;
select * from atv_vendas;

-- a) Todos os produtos cadastrados:
select nome, categoria from atv_produtos;

-- b) Todas as vendas realizadas:
select * from atv_vendas;

-- c) Produtos da categoria periféricos:
select nome
from atv_produtos
where categoria like "%perifericos%";

-- d) Vendas realizadas no dia 2025-04-02:
select * from atv_vendas
where data_venda = '2025-04-02';

-- e) Nome do cliente + data da venda:
select c.nome, v.data_venda
from atv_clientes c, atv_vendas v
where c.id_cliente = v.id_cliente;

-- f) Nome e cidade dos clientes que fizeram compras:
select c.nome, c.uf, c.endereco
from atv_clientes c, atv_vendas v
where c.id_cliente = v.id_cliente;

-- g) Clientes que compraram no dia 2025-04-01:
select c.nome, v.data_venda
from atv_clientes c, atv_vendas v
where v.id_cliente = c.id_cliente and v.data_venda = '2025-04-01';

-- h) Todas as vendas feitas por Ana Paula:
select *
from atv_vendas v1, atv_vendedores v2
where v1.id_vendedor = v2.id_vendedor and v2.nome = "ana paula";