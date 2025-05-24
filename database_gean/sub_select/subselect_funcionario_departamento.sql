CREATE TABLE departamento (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_departamento VARCHAR(100)
);

CREATE TABLE funcionario (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_funcionario VARCHAR(100),
  id_departamento INT
);

-- departamentos
INSERT INTO departamento (nome_departamento) VALUES
('Recursos Humanos'),
('Financeiro'),
('TI');

-- funcionários
INSERT INTO funcionario (nome_funcionario, id_departamento) VALUES
('João Pereira', 1),
('Larissa Costa', 2),
('Marcelo Dias', 3);

-- RETORNE >>> nome do funcionário + nome do departamento:

select nome_funcionario,
(select  nome_departamento from departamento where departamento.id = funcionario.id_departamento) as "nome e curso"
from funcionario;