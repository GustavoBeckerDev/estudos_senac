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