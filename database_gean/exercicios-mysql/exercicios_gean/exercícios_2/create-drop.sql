create table atv_clientes (
id_cliente INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(80) NOT NULL,
cidade VARCHAR(50) NOT NULL,
uf VARCHAR(10) NOT NULL,
endereco VARCHAR(100) NOT NULL);

create table atv_vendas (
id_venda INT PRIMARY KEY AUTO_INCREMENT,
data_venda DATE,
id_cliente INT,
id_produto INT,
id_vendedor INT,
FOREIGN KEY (id_cliente) REFERENCES atv_clientes(id_cliente),
FOREIGN KEY (id_produto) REFERENCES atv_produtos(id_produto),
FOREIGN KEY (id_vendedor) REFERENCES atv_vendedores(id_vendedor));

create table atv_produtos (
id_produto INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
categoria VARCHAR(100) NOT NULL);

create table atv_vendedores (
id_vendedor INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL);

drop table atv_clientes;
drop table atv_produtos;
drop table atv_vendedores;
drop table atv_vendas;