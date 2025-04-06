select * from clientes;

-- Quantidade de clientes inativos: 

select count(nome)
from clientes
where situacao = false;

-- Nome de clientes e data de cadastro: 

select nome, data_cadastro
from clientes;

-- Clientes inativos e endereço de email:

select nome, email
from clientes
where situacao = false;

-- Clientes que tenham a letra M na inicial do nome:

select * from clientes
where nome like 'M%';






