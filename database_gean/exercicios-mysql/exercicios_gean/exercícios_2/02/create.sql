create table departamentos (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL
);

drop table departamentos;

create table setores (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
id_depart INT,
FOREIGN KEY (id_depart) REFERENCES departamentos (id)
);

drop table setores;

create table funcionarios (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
idade INT(3) NOT NULL,
id_depart INT,
id_setor INT,
FOREIGN KEY (id_depart) REFERENCES departamentos(id),
FOREIGN KEY (id_setor) REFERENCES setores(id)
);

drop table funcionarios;