CREATE TABLE departamento (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_departamento VARCHAR(100)
);

CREATE TABLE cidade (
id INT PRIMARY KEY AUTO_INCREMENT,
nome_cidade VARCHAR(100)
);

CREATE TABLE funcionario (
  id INT PRIMARY KEY AUTO_INCREMENT,
  departamento_id INT,
  cidade_id INT,
  nome_funcionario VARCHAR(100)
);

INSERT INTO departamento (nome_departamento) VALUES
('Recursos Humanos'),
('Financeiro'),
('TI');

INSERT INTO cidade (nome_cidade) VALUES
('São Paulo'),
('Florianópolis'),
('Curitiba');

INSERT INTO funcionario (departamento_id, cidade_id, nome_funcionario ) VALUES
(3, 2, 'João Pereira'),
(1, 1, 'Larissa Costa'),
(2, 3, 'Marcelo Dias');

-- RETORNE >>> nome do funcionário + nome do departamento + nome da cidade

select nome_funcionario as 'nome do funcionario',
(select nome_departamento from departamento where departamento.id = funcionario.departamento_id) as 'nome do departamento',
(select nome_cidade from cidade where cidade.id = funcionario.cidade_id) as 'nome da cidade'
from funcionario;

