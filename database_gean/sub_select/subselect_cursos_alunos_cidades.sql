CREATE TABLE cidades (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_cidade VARCHAR(100)
);

CREATE TABLE cursos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_curso VARCHAR(100)
);

CREATE TABLE alunos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_aluno VARCHAR(100),
  id_curso INT,
  id_cidade INT
);

INSERT INTO cidades (nome_cidade) VALUES
('Videira'),
('Caçador'),
('Curitibanos');

INSERT INTO cursos (nome_curso) VALUES
('Desenvolvimento de Sistemas'),
('Administração'),
('Design');

INSERT INTO alunos (nome_aluno, id_curso, id_cidade) VALUES
('Isabela Ferreira', 1, 1),
('João Andrade', 2, 2),
('Marina Lopes', 3, 3);

-- RETORNE O CURSO O CIDADE E O NOME DO ALUNO

select nome_aluno,
(select nome_curso from cursos where alunos.id_curso = cursos.id) as "nome curso",
(select nome_cidade from cidades where alunos.id_cidade = cidades.id) as "nome cidade"
from alunos;
