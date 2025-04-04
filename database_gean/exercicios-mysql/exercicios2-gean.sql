create table clientes (
id_cliente INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
data_cadastro TIMESTAMP default current_timestamp,
situacao boolean default true);

select * from clientes;

insert into clientes (nome, email) values
("Marcos", "mama@gmail.com");

update clientes set situacao = false
where id_cliente = 5;







