CREATE TABLE curso (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_curso VARCHAR(100)
);

CREATE TABLE aluno (
  id INT PRIMARY KEY AUTO_INCREMENT,
  curso_id INT,
  faculdade_id INT,
  nome_aluno VARCHAR(100)
);

CREATE TABLE faculdade (
id INT PRIMARY KEY AUTO_INCREMENT,
nome_faculdade VARCHAR(100));

INSERT INTO curso (nome_curso) VALUES
('Informática'),
('Administração'),
('Design Gráfico');

INSERT INTO aluno (curso_id, faculdade_id, nome_aluno) VALUES
(2, 3, 'Ana Clara'),
(1, 1, 'Bruno Silva'),
(3, 2, 'Carlos Mendes');

INSERT INTO faculdade (nome_faculdade) VALUES
('IFC'),
('UNOESC'),
('UNIVALI');

-- DE UM SELECT NO NOME DO ALUNO COM O NOME DO CURSO E O NOME DA FACULDADE:

select nome_aluno as 'nome do aluno',
(select nome_curso from curso where curso.id = aluno.curso_id) as 'nome do curso',
(select nome_faculdade from faculdade where faculdade.id = aluno.faculdade_id) as 'nome da faculdade'
from aluno;