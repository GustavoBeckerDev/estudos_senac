select * from clientes;

select * from endereco;

select c.nome, e.rua, e.cidade, e.uf 
from clientes c, endereco e
where c.id = e.cliente_id
