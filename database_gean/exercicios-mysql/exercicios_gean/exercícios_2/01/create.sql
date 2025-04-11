create table atv_clientes (
id_cliente int auto_increment primary key,
nome varchar(80) not null,
d_nascimento date);

drop table atv_clientes;

create table atv_end_clientes (
id_end_cliente int auto_increment primary key,
uf varchar(50) not null,
cidade varchar(50) not null,
rua varchar(100) not null,
id_cliente int,
foreign key (id_cliente) references atv_clientes(id_cliente));

drop table atv_end_clientes;

create table atv_produtos (
id_produto int auto_increment primary key,
categoria varchar(50) not null,
nome varchar(100) not null,
valor_un decimal(10,2) not null);

drop table atv_produtos;
 
create table atv_funcionarios (
id_funcionario int auto_increment primary key,
nome varchar(100) not null,
d_nascimento date);

create table atv_vendas (
id_venda int auto_increment primary key,
data_venda date,
quantidade int not null,
id_cliente int,
id_produto int,
id_funcionario int,
foreign key (id_cliente) references atv_clientes(id_cliente),
foreign key (id_produto) references atv_produtos(id_produto),
foreign key (id_funcionario) references atv_funcionarios(id_funcionario));

drop table atv_vendas;




