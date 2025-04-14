select * from alunos;
select * from matriculas;

-- a) Mostre o nome do aluno e o curso que ele está matriculado:

select a.nome, m.curso
from alunos a, matriculas m 
where m.id_aluno = a.id;

-- b) Liste os cursos em que Beatris Farias está matriculada:

select a.nome, m.curso
from alunos a, matriculas m 
where m.id_aluno = a.id and a.nome = 'beatris farias';

-- c) Mostre apenas os alunos que estão matriculados em programaçao web:

select a.nome, m.curso
from alunos a, matriculas m
where m.id_aluno = a.id and m.curso = 'programacao web';

-- d) Liste todos os alunos com mais de uma matrícula:

select a.nome, count(m.id) as total_matriculas
from alunos a, matriculas m
where m.id_aluno = a.id
group by a.id
having count(m.id) > 1;

