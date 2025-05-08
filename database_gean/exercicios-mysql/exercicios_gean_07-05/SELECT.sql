-- a) Liste os colaboradores com cargo de dev junior:
select * from atv_colaboradores
where cargo = 'dev junior';

-- b) Liste as tarefas com prazo menor que 7 dias: 
select * from atv_tarefas
where prazo_dias < 7;

-- c) Liste os projetos com nome iniciando com 'S':
select * from atv_projetos
where nome like 's%';

-- d) Liste os colaboradores cujo nome possui a letra 'e':
select * from atv_colaboradores
where nome like '%e%';

-- e) Liste todas as entregas ordenadas pelas data mais próxima:
select data_entrega
from atv_entregas
order by data_entrega asc;