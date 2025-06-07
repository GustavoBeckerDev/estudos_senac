CREATE TABLE vendedor (
    id_vendedor INT AUTO_INCREMENT PRIMARY KEY, -- Chave primária do vendedor
    nome_vendedor VARCHAR(100) -- Nome do vendedor
);

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY, -- Chave primária do cliente
    nome_cliente VARCHAR(100) -- Nome do cliente
);

CREATE TABLE venda (
    id_venda INT AUTO_INCREMENT PRIMARY KEY, -- Chave primária da venda
    id_vendedor INT, -- Código do vendedor (chave estrangeira)
    id_cliente INT, -- Código do cliente (chave estrangeira)
    data_venda DATE, -- Data da venda
    FOREIGN KEY (id_vendedor) REFERENCES vendedor(id_vendedor),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE item_venda (
    id_item INT AUTO_INCREMENT PRIMARY KEY, -- Chave primária do item
    id_venda INT, -- Código da venda (chave estrangeira)
    id_produto INT, -- Código do produto (chave estrangeira)
    quantidade INT, -- Quantidade vendida
    preco_unitario DECIMAL(10,2), -- Preço unitário
    FOREIGN KEY (id_venda) REFERENCES venda(id_venda),
    FOREIGN KEY (id_produto) REFERENCES produto(id_produto)
);

INSERT INTO vendedor (nome_vendedor) VALUES
('João Vendas'),
('Maria Silva'),
('Carlos Junior');

INSERT INTO cliente (nome_cliente) VALUES
('Ana Paula'),
('Bruno Souza'),
('Fernanda Lima');

INSERT INTO venda (id_vendedor, id_cliente, data_venda) VALUES
(1, 1, '2024-05-01'),
(2, 2, '2024-05-02'),
(3, 3, '2024-05-03'),
(1, 2, '2024-05-04'),
(2, 1, '2024-05-05');

INSERT INTO item_venda (id_venda, id_produto, quantidade, preco_unitario) VALUES
(1, 1, 2, 1500.00), -- VENDA 1, PRODUTO 1(Smartphone)
(1, 3, 1, 50.00),   -- VENDA 1, PRODUTO 3(Camiseta)
(2, 4, 1, 120.00),  -- Calça Jeans
(2, 6, 3, 25.00),   -- Arroz
(3, 2, 1, 3200.00), -- Notebook
(4, 5, 5, 5.00),    -- Chocolate
(4, 9, 2, 40.00),   -- Queijo
(5, 8, 1, 200.00);  -- Jaqueta

-- NOME DO VENDEDOR, QUANTIDADE DE PRODUTOS, CATEGORIA

select nome_vendedor, -- OBTIVE O NOME DO VENDEDOR
(select SUM(IV2.quantidade) from item_venda as IV2 where IV2.id_venda = IV.id_venda) as total_produtos,
(select descricao_categoria from categoria where id_categoria = 
(select id_categoria from produto where id_produto = IV.id_produto)) as categoria
from vendedor as V, item_venda as IV, venda as VD
where V.id_vendedor = VD.id_vendedor
and VD.id_venda = IV.id_venda;

-- NOME DO VENDEDOR, DATA DA VENDA, PRODUTO, QUANTIDADE, PREÇO

select nome_vendedor, VD.data_venda,
(select nome_produto from produto where id_produto = IV.id_produto) as produto,
IV.quantidade, IV.preco_unitario
from vendedor V, item_venda IV, venda VD
where V.id_vendedor = VD.id_vendedor
and VD.id_venda = IV.id_venda;

-- NOME DO CLIENTE, PRODUTO, PREÇO, CATEGORIA, DATA VENDA

select nome_cliente,
(select nome_produto from produto where id_produto = IV.id_produto) as produto,
IV.preco_unitario,
(select descricao_categoria from categoria where id_categoria =
(select id_categoria from produto where id_produto = IV.id_produto)) as categoria,
VD.data_venda
from cliente C, item_venda IV, venda VD
where C.id_cliente = VD.id_cliente
and VD.id_venda = IV.id_venda;

-- DATA VENDA, NOME DO CLIENTE | NOME DO VENDEDOR | QUANTIDADE VENDIDA | TOTAL R$

select VD.data_venda as "Data da venda", 
C.nome_cliente as "Nome do cliente", 
V.nome_vendedor as "Nome do vendedor",
sum(IV.quantidade) as "quantidade total",
sum(IV.quantidade * IV.preco_unitario) as "Total R$"
from venda VD, cliente C, vendedor V, item_venda IV
where VD.id_cliente = C.id_cliente
and VD.id_vendedor = V.id_vendedor
and VD.id_venda = IV.id_venda
group by VD.id_venda;





