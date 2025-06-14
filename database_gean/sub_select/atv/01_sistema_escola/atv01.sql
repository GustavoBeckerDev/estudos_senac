-- SISTEMA PARA ESCOLA:
-- ALUNOS, PROFESSORES, CURSOS, MATRÍCULAS.
-- QUAIS ALUNOS ESTÃO EM QUAIS CURSOS COM QUAIS PROFESSORES.
-- VALOR TOTAL PAGO POR CADA ALUNO.

-- A) LISTA OS NOMES DOS ALUNOS E OS CURSOS QUE ESTÃO MATRICULADOS.
-- B) MOSTRAR OS CURSOS COM O NOME DO PROFESSOR RESPONSÁVEL.
-- C) CALCULAR QUANTO CADA ALUNO PAGOU NO TOTAL, SOMANDO OS CURSOS EM QUE ESTÁ MATRICULADO.
-- D) MOSTRAR TODOS OS ALUNOS QUE ESTÃO MATRICULADOS NO CURSO "BANCO DE DADOS MYSQL".

-- CREATE TABLE --

create table aluno (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
idade INT(3) NOT NULL,
email VARCHAR(100) NOT NULL);

create table professor (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL);

create table curso (
id INT PRIMARY KEY AUTO_INCREMENT,
id_professor INT(3),
nome VARCHAR(50) NOT NULL,
FOREIGN KEY (id_professor) REFERENCES professor(id));

create table matricula (
id INT PRIMARY KEY AUTO_INCREMENT,
id_aluno INT(3),
id_curso INT(3),
valor DECIMAL(10,2),

FOREIGN KEY (id_aluno) REFERENCES aluno(id),
FOREIGN KEY (id_curso) REFERENCES curso(id));

-- INSERT TABLE --

insert into aluno (nome, idade, email) values
('Gustavo Becker', 27, 'gustavobecker@email.com'),
('Marcela Tonello', 33, 'marcelatonello@email,com'),
('Camila Tonello', 37, 'camilatonello@email.com'),
('Pedro Telésforo', 29, 'pedrotelesforo@email.com');

insert into professor (nome, email) values
('Gean Santos', 'geansantos@email.com'),
('Ricardo Gomes', 'ricardogomes@email,com'),
('Valéria Cendron', 'valeriacendron@email.com');

insert into curso (nome, id_professor) values
('Banco de Dados MYSQL', 1),
('Lógia de Programação', 2),
('Banco de Dados ORACLE', 1),
('Linux', 3);

insert into matricula (id_aluno, id_curso, valor) values
(1, 1, 1999.99),
(1, 2, 2999.99),
(2, 3, 1850.00),
(2, 4, 2999.99),
(3, 2, 2999.99),
(3, 1, 1999.99),
(4, 4, 2999.99),
(4, 1, 2999.99);

-- SUB SELECT --

-- A) LISTA OS NOMES DOS ALUNOS E OS CURSOS QUE ESTÃO MATRICULADOS:

select a.nome, c.nome 
from aluno a, matricula m, curso c
where m.id_aluno = a.id
and c.id = m.id_curso;

-- B) MOSTRAR OS CURSOS COM O NOME DO PROFESSOR RESPONSÁVEL:

select c.nome as "nome do curso", 
p.nome as "nome do professor"
from curso c, professor p
where c.id_professor = p.id;

-- C) CALCULAR QUANTO CADA ALUNO PAGOU NO TOTAL, SOMANDO OS CURSOS EM QUE ESTÁ MATRICULADO:

select sum(m.valor) as "total gasto", a.nome as "nome aluno"
from matricula m, aluno a 
where m.id_aluno = a.id
group by id_aluno;

-- D) MOSTRAR TODOS OS ALUNOS QUE ESTÃO MATRICULADOS NO CURSO "BANCO DE DADOS MYSQL":

select a.nome, c.nome
from aluno a, matricula m, curso c
where m.id_aluno = a.id
and c.id = m.id_curso
and c.nome like "%MYSQL%";