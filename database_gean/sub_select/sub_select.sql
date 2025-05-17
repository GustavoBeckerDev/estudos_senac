create table sub_clientes (
id int primary key auto_increment,
nome varchar(100) not null);

create table sub_enderecos (
id int primary key auto_increment,
cliente_id int,
rua varchar(100),
bairro varchar(100),
cidade varchar(100));

create table sub_pedidos (
id int primary key auto_increment,
cliente_id int,
data_pedido date,
valor decimal(10,2));

create table sub_itens_pedido (
id int primary key auto_increment,
pedido_id int,
produto varchar(100),
quantidade int,
preco_unitario decimal(10,2));


insert into sub_clientes (nome) values
('gustavo'),
('marcela'),
('camila'),
('pedro'),
('almir');

insert into sub_enderecos (cliente_id, rua, bairro, cidade) values
(1, 'rua aristides francisco', 'sao judas', 'itajai'), 
(2, 'rua sao paulo', 'centro', 'tangara'), 
(3, 'rua firmino', 'soque', 'tangara'), 
(4, 'rua anta gorda', 'centro', 'anta gorda'), 
(5, 'rua joaquim falco', 'dom bosco', 'itajai');

insert into sub_pedidos (cliente_id, data_pedido, valor) values
(1, '2025-05-01', 199.99),
(1, '2025-05-02', 299.99),
(2, '2025-05-03', 99.99),
(2, '2025-05-04', 299.99),
(3, '2025-05-05', 199.99),
(3, '2025-05-06', 99.99),
(4, '2025-05-07', 299.99),
(4, '2025-05-08', 99.99),
(5, '2025-05-09', 299.99),
(5, '2025-05-10', 99.99);

insert into sub_itens_pedido (pedido_id, produto, quantidade, preco_unitario) values
(1, 'teclado', 2, 99.99),
(2, 'mouse', 3, 99.99),
(3, 'mousepad', 1, 99.99),
(4, 'tela hd', 1, 299.99),
(5, 'teclado', 2, 99.99),
(6, 'mouse', 1, 99.99),
(7, 'ssd 240gb', 1, 299.99),
(8, 'memoria ram 8gb', 1, 99.99),
(9, 'camiseta rpg', 3, 99.99),
(10, 'caixa de som', 1, 99.99);



