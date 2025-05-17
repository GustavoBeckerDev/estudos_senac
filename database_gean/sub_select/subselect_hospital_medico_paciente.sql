CREATE TABLE hospital (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_hospital VARCHAR(100)
);

CREATE TABLE medico (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_medico VARCHAR(100),
  id_hospital INT
);

CREATE TABLE paciente (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_paciente VARCHAR(100),
  id_medico INT
);

-- nome hospital

INSERT INTO hospital (nome_hospital) VALUES
('Hospital São Lucas'),
('Hospital Vida Saudável');

-- medicoo

INSERT INTO medico (nome_medico, id_hospital) VALUES
('Dra. Renata Costa', 1),
('Dr. Felipe Andrade', 2);

-- pacientte

INSERT INTO paciente (nome_paciente, id_medico) VALUES
('Mariana Silva', 1),
('Lucas Oliveira', 2);

select nome_paciente,
(select nome_medico from medico where paciente.id_medico = medico.id) as "nome do medico",
(select nome_hospital from hospital where hospital.id = 
(select id_hospital from medico where medico.id = paciente.id_medico)) as "nome do hospital"
from paciente;
