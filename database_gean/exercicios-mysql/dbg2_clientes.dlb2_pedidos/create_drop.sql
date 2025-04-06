create table dbg2_clientes(
cliente_id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL);


create table dbg2_pedidos (
pedido_id INT PRIMARY KEY AUTO_INCREMENT,
cliente_id INT,
produto VARCHAR(150) NOT NULL,
valor DECIMAL (8,2),
FOREIGN KEY (cliente_id) REFERENCES dbg2_clientes(cliente_id)
);

drop table dbg2_clientes;

drop table dbg2_pedidos;
