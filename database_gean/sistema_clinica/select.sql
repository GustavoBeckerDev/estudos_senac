-- PARTE 03 : CONSULTAS ENTRE TABELAS
-- OBS : IREI SEGUIR A ORDEM DAS QUESTÕES DA FOLHA, SENDO: C, D, B, E, A.

-- c) Exiba os serviços ou produtos contratados com quantidade superior a um valor definido (superior a 50.00 reais):

select *
from clinica_vendas
where valor > 50;

-- d) LISTE OS NOMES DOS FUNCIONÁRIOS ENVOLVIDOS EM VENDAS OU ATENDIMENTOS ESPECÍFICOS (vendas entre os dias 04/05 e 17/05) : 

select cf.nome, cv.data_venda
from clinica_funcionarios  cf, clinica_vendas cv
where cv.data_venda between '2025-05-04 14:30:00' and '2025-05-17 18:00:00';

-- b) MOSTRE PEDIDOS FEITOS POR CLIENTES DE UMA DETERMINADA CIDADE OU ESTADO:

select cv.*, cc.nome, cc.cidade
from clinica_vendas cv, clinica_clientes cc
where cv.cliente_id = cc.id and cc.cidade = 'tangara';

-- e) EXIBA OS DADOS DOS CLIENTES QUE REALIZARAM COMPRAS OU AGENDAMENTOS EM UM DETERMINADO MÊS:

select cc.nome, cc.telefone, cc.email, cc.cidade, cc.uf
from clinica_clientes cc, clinica_vendas cv
where cv.data_venda between '2025-05-01' and '2025-5-31'
group by cc.nome, cc.cidade, cc.uf;

-- a) LISTE REGISTROS CRUZANDO INFORMAÇÕES DE CLIENTES E PRODUTOS COM BASE EM UMA DATA ESPECÍFICA: 

select cv.id, cp.nome, cc.nome, cc.email, cv.data_venda
from clinica_clientes cc, clinica_vendas cv, clinica_produtos cp
where cv.cliente_id = cc.id and cv.cliente_id = cc.id and cv.data_venda = '2025-05-21 13:40:00'
group by cv.id;




