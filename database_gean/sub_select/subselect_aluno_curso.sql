CREATE TABLE curso (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_curso VARCHAR(100)
);

CREATE TABLE aluno (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_aluno VARCHAR(100),
  id_curso INT
);

INSERT INTO curso (nome_curso) VALUES
('Informática'),
('Administração'),
('Design Gráfico');

INSERT INTO aluno (nome_aluno, id_curso) VALUES
('Ana Clara', 1),
('Bruno Silva', 2),
('Carlos Mendes', 3);

select nome_aluno,
(select nome_curso from curso where curso.id = aluno.id_curso) as "nome e curso"
from aluno;

