CREATE TABLE clientes (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_cliente VARCHAR(100)
);

CREATE TABLE entregadores (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_entregador VARCHAR(100)
);

CREATE TABLE pedidos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome_pedido VARCHAR(100),
  id_cliente INT,
  id_entregador INT
);

INSERT INTO clientes (nome_cliente) VALUES
('Eduardo Lima'),
('Carla Souza');

INSERT INTO entregadores (nome_entregador) VALUES
('Tiago Ribeiro'),
('Juliana Dias');

INSERT INTO pedidos (nome_pedido, id_cliente, id_entregador) VALUES
('Pedido A', 1, 2),
('Pedido B', 2, 1);

-- Retorne: CLIENTE, ENTREGADOR, PEDIDO

select nome_pedido,
(select nome_cliente from clientes where pedidos.id_cliente = clientes.id) as nome_cliente,
(select nome_entregador from entregadores where pedidos.id_cliente = entregadores.id) as nome_entregador
from pedidos;