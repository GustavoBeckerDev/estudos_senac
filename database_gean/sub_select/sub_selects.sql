-- DA UM SUB-SELECT NO NOME DOS CLIENTES QUE ESTÃO RELACIONADOS NA TABELA PEDIDOS, APENAS CLIENTES QUE FIZERAM PEDIDOS
select nome from sub_clientes where id in (
select cliente_id from sub_pedidos);

-- DA UM SUB-SELECT DO NOME DO PRODUTO E DA DATA DO PEDIDO UMA DE CADA TABELA
select produto,
(select data_pedido from sub_pedidos where sub_pedidos.id = sub_itens_pedido.pedido_id) as data_pedido
from sub_itens_pedido;

select nome,
(select rua from sub_enderecos where sub_enderecos.cliente_id = sub_clientes.id) as "rua cliente",
(select bairro from sub_enderecos where sub_enderecos.cliente_id = sub_clientes.id) as "bairro cliente",
(select cidade from sub_enderecos where sub_enderecos.cliente_id = sub_clientes.id) as "cidade cliente"
from sub_clientes;




