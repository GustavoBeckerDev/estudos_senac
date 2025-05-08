create table atv_colaboradores (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
d_nascimento DATE NOT NULL,
cargo VARCHAR(100) NOT NULL,
email VARCHAR(200) NOT NULL,
celular VARCHAR(20) NOT NULL);

create table atv_projetos (
id INT PRIMARY KEY AUTO_INCREMENT,
colaborador_id INT,
nome VARCHAR(100) NOT NULL,

FOREIGN KEY (colaborador_id) REFERENCES atv_colaboradores(id)
);

create table atv_tarefas (
id INT PRIMARY KEY AUTO_INCREMENT,
colaborador_id INT,
projeto_id INT,
descricao VARCHAR(100) NOT NULL,
prazo_dias INT(50) NOT NULL,

FOREIGN KEY (colaborador_id) REFERENCES atv_colaboradores(id),
FOREIGN KEY (projeto_id) REFERENCES atv_projetos(id)
);

create table atv_entregas(
id INT PRIMARY KEY AUTO_INCREMENT,
colaborador_id INT,
projeto_id INT, 
tarefa_id INT,
data_entrega DATE NOT NULL,

FOREIGN KEY (colaborador_id) REFERENCES atv_colaboradores(id),
FOREIGN KEY (projeto_id) REFERENCES atv_projetos(id),
FOREIGN KEY (tarefa_id) REFERENCES atv_tarefas(id)
);






