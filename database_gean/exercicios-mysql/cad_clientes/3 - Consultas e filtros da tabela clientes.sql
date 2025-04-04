-- LISTAR TODOS OS CLIENTES CADASTRADOS
select * from clientes;

-- FILTRAR CLIENTES QUE MORAM EM SP
select * from clientes
where estado = 'SP';

-- BUSCAR CLIENTES CUJO NOME COMEÇA COM A LETRA 'A'
select * from clientes
where nome like 'A%';

-- LISTAR CLIENTES COM IDADE MAIOR QUE 30 ANOS
select * from clientes
where idade > 30;

-- LISTAR CLIENTES ENTRE 25 E 35 ANOS QUE MORAM NO ESTADO DE MG
select * from clientes
where idade >=25 and idade <=35 and estado = 'MG';

-- MOSTRAR APENAS OS NOMES E EMAILS DOS CLIENTES QUE MORAM EM SP
select nome, email, estado
from clientes
where estado = 'SP';

-- FILTRAR CLIENTES CUJO EMAIL TERMINA COM '@emailcom'
select * from clientes
where email like "%@email.com";

