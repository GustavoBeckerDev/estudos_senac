-- Create

create table cad_configuracao (
  id int(6) auto_increment primary key,
  nome varchar(50) not null,
  cnpj VARCHAR(20) NOT NULL,
  vagas_moto_rotativo INT(4),
  vagas_carro_rotativo INT(4),
  vagas_moto_mensalista INT(4),
  vagas_carro_mensalista INT(4),
  vagas_carro_especiais INT(4)
);

create table cad_tarifacao (
  id int(6) auto_increment primary key,
  situacao varchar(1) not null DEFAULT 'A',
  nome varchar(50) not null
);

create table cad_atendente (
  id int(6) auto_increment primary key,
  situacao varchar(1) not null DEFAULT 'A',
  nome varchar(50) not null
);

create table cad_clientes (
  id int(6) auto_increment primary key,
  tarifacao_id INT(6) NOT NULL,
  situacao varchar(1) not null DEFAULT 'A',
  nome varchar(100) not null,
  cpf_cnpj varchar(20) not null,
  obs varchar(200), 
  
  FOREIGN KEY (tarifacao_id) REFERENCES cad_tarifacao(id)
);

create table cad_contatos_cliente (
  id int(6) auto_increment primary key,
  cliente_id INT(6) NOT NULL,
  tipo varchar(1) not null DEFAULT 'P',
  celular varchar(20) not null,
  fixo varchar(20) not null,
  email varchar(200), 
  
  FOREIGN KEY (cliente_id) REFERENCES cad_clientes(id)
);

create table cad_tipo_veiculos (
  id int(6) auto_increment primary key,
  situacao varchar(1) not null DEFAULT 'A',
  categoria varchar(50) not null
);

create table cad_veiculos (
  id int(6) auto_increment primary key,
  cliente_id INT(6) NOT NULL,
  tipo_veiculo_id INT(6) NOT NULL,
  situacao varchar(1) not null DEFAULT 'A',
  placa varchar(10) not null,
  
  FOREIGN KEY (cliente_id) REFERENCES cad_clientes(id),
  FOREIGN KEY (tipo_veiculo_id) REFERENCES cad_tipo_veiculos(id)
);

create table cad_servicos (
  id int(6) auto_increment primary key,
  situacao varchar(1) not null DEFAULT 'A',
  nome varchar(50) not null
);

create table cad_servicos_x_tipo_veiculo (
  id int(6) auto_increment primary key,
  servicos_id INT(6) NOT NULL,
  tipo_veiculo_id INT(6) NOT NULL,
  tarifacao_id INT(6) NOT NULL,
  limite INT(3) NOT NULL,
  valor DECIMAL(10,4) NOT NULL,
  tipo_vaga VARCHAR(1) NOT NULL,

  FOREIGN KEY (servicos_id) REFERENCES cad_servicos(id),
  FOREIGN KEY (tipo_veiculo_id) REFERENCES cad_tipo_veiculos(id),
  FOREIGN KEY (tarifacao_id) REFERENCES cad_tarifacao(id)
  );
  
create table movimentacao (
  id int(6) auto_increment primary key,
  atendente_id INT(6) NOT NULL,
  cliente_id INT(6) NOT NULL,
  veiculo_id INT(6) NULL,
  servicos_tipo_veiculo_id INT(6) NOT NULL,
  situacao VARCHAR(1) DEFAULT 'A' NOT NULL,
  data_hora_abertura DATETIME DEFAULT CURRENT_TIMESTAMP,
  data_hora_fechamento DATETIME,
  nome VARCHAR(100) NOT NULL,
  cpf_cnpj VARCHAR(12) NOT NULL,
  veiculo VARCHAR(10) NOT NULL,
  placa VARCHAR(10) NOT NULL,

  FOREIGN KEY (atendente_id) REFERENCES cad_atendente(id),
  FOREIGN KEY (cliente_id) REFERENCES cad_clientes(id),
  FOREIGN KEY (servicos_tipo_veiculo_id) REFERENCES cad_servicos_x_tipo_veiculo(id)  
  );
  
create table cad_tipo_recebimento (
  id int(6) auto_increment primary key,
  situacao varchar(1) not null DEFAULT 'A',
  nome varchar(50) not null
);

create table caixa_operacional (
  id int(6) auto_increment primary key,
  atendente_id INT(6) NOT NULL,
  data_hora_abertura DATETIME DEFAULT CURRENT_TIMESTAMP,
  data_hora_fechamento DATETIME,
  valor_inicial DECIMAL(10,2) NULL,
  valor_final DECIMAL(10,2) NULL,

  FOREIGN KEY (atendente_id) REFERENCES cad_atendente(id)
  );

create table caixa_movimentacao (
  id int(6) auto_increment primary key,
  caixa_operacional_id int(6) NOT NULL,
  movimentacao_id int(6) NOT NULL,
  tipo_recebimento_id int(6) NOT NULL,
  data_lcto DATETIME DEFAULT CURRENT_TIMESTAMP,
  valor DECIMAL(10,2) NULL,

  FOREIGN KEY (caixa_operacional_id) REFERENCES caixa_operacional(id),
  FOREIGN KEY (movimentacao_id) REFERENCES movimentacao(id),
  FOREIGN KEY (tipo_recebimento_id) REFERENCES cad_tipo_recebimento(id)
  );
