select * from dbg2_clientes;

select * from dbg2_pedidos;

-- Liste o nome do cliente e o nome do produto que ele comprou.
select c.nome, p.produto
from dbg2_clientes c, dbg2_pedidos p
where c.cliente_id = p.cliente_id;

-- Mostre o nome do cliente, o produto e o valor do pedido.
select c.nome, p.produto, p.valor
from dbg2_clientes c, dbg2_pedidos p
where c.cliente_id = p.cliente_id;

-- Mostre todos os pedidos (com nome do cliente e valor) que custam mais de R$50,00.
select nome, valor
from dbg2_clientes as c join dbg2_pedidos as p
on c.cliente_id = p.cliente_id
where valor > 50;

-- Mostre o email do cliente e o valor total gasto em pedidos.
select c.email, sum(p.valor) as total_compras
from dbg2_clientes as c join dbg2_pedidos as p 
on c.cliente_id = p.cliente_id
group by c.email;

-- Liste os nomes dos clientes que fizeram mais de 1 pedido, com a quantidade de pedidos.
select c.nome, count(p.produto)
from dbg2_clientes as c join dbg2_pedidos as p
on c.cliente_id = p.cliente_id
group by c.nome
having count(p.pedido_id) > 1;

