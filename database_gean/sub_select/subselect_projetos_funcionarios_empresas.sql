CREATE TABLE empresas (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_empresa VARCHAR(100)
);

CREATE TABLE projetos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_projeto VARCHAR(100),
  id_empresa INT
);

CREATE TABLE funcionarios (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_funcionario VARCHAR(100),
  id_projeto INT
);

INSERT INTO empresas (nome_empresa) VALUES
('AlphaTech'),
('BetaCorp');

INSERT INTO projetos (nome_projeto, id_empresa) VALUES
('Sistema ERP', 1),
('App Mobile', 2);

INSERT INTO funcionarios (nome_funcionario, id_projeto) VALUES
('André Silva', 1),
('Patrícia Moura', 2);

select nome_funcionario,
(select nome_projeto from projetos where funcionarios.id_projeto = projetos.id) as "nome do projeto",
(select nome_empresa from empresas where empresas.id = 
(select id_empresa from projetos where projetos.id_empresa = funcionarios.id_projeto)) as "nome da empresa"
from funcionarios;

