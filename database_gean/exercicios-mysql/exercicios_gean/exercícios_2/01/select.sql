select * from atv_clientes;
select * from atv_end_clientes;
select * from atv_produtos;
select * from atv_funcionarios;
select * from atv_vendas;

-- a) Todos os produtos cadastrados:
select * from atv_produtos;

-- b) Todas as vendas realizadas:
select * from atv_vendas;

-- c) Produtos das categorias periféricos:
select nome, categoria, valor_un
from atv_produtos
where categoria = 'perifericos'; 

-- d) Vendas realizadas no dia 2025-04-02:
select * 
from atv_vendas
where data_venda = '2025-04-02';

-- e) Nome do cliente + data da venda:
select c.nome, v.data_venda
from atv_clientes c, atv_vendas v
where c.id_cliente = v.id_cliente;

-- f) Nome e cidade dos clientes que fizeram compras:
select c.nome, ed.cidade
from atv_clientes c, atv_vendas v, atv_end_clientes ed
where c.id_cliente = v.id_cliente and c.id_cliente = ed.id_cliente;

-- g) Clientes que compraram no dia 2025-04-01:
select c.nome, v.data_venda
from atv_clientes c, atv_vendas v
where c.id_cliente = v.id_cliente and data_venda = '2025-04-01';

-- h) Todas as vendas feitas por ana paula:
select *
from atv_vendas v, atv_funcionarios f
where v.id_funcionario = f.id_funcionario and nome = 'ana paula';
