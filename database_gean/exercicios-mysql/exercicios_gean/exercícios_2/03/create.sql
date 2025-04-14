-- Alunos e Matrículas

create table alunos (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
d_nascimento DATE NOT NULL,
celular VARCHAR(30) NOT NULL,
email VARCHAR(100) NOT NULL);

create table matriculas (
id INT PRIMARY KEY AUTO_INCREMENT,
curso VARCHAR(100) NOT NULL,
d_matricula TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
id_aluno INT,
FOREIGN KEY (id_aluno) REFERENCES alunos(id));