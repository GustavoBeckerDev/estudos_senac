select * from departamentos;
select * from setores;
select * from funcionarios;

-- a) Liste o nome de todos os funcionarios com o nome do departamento:

select f.nome, d.nome
from funcionarios f, departamentos d
where f.id_depart = d.id;

-- b) Mostre os nomes dos funcionarios que trabalham no setor de TI:

select f.nome, s.nome
from funcionarios f, setores s 
where f.id_setor = s.id and s.nome = 'ti';

-- c) Liste os funcionários e departamentos exceto os do setor "Marketing":

select f.nome, d.nome, s.nome
from funcionarios f, departamentos d, setores s
where f.id_depart = d.id and f.id_setor = s.id and s.nome <> 'marketing'
group by f.nome;

-- d) Mostre nome e departamento dos funcionários cujos nomes começem com 'p':

select f.nome, d.nome
from funcionarios f, departamentos d
where f.id_depart = d.id and f.nome  like 'p%';