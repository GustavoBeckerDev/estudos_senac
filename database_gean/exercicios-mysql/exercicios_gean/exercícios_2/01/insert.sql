insert into atv_clientes (nome, d_nascimento) values
('gustavo', '1998-05-04'),
('marcela', '1992-01-21'),
('camila', '1989-04-24'),
('pedro', '1995-10-22'),
('salete', '1965-09-21');

select * from atv_clientes;

insert into atv_end_clientes (id_cliente, uf, cidade, rua) values
(1, 'sc', 'itajai', 'rua aristides 132'),
(1, 'sc', 'tangara', 'rodovia eng. lineu bonato'),
(2, 'sc', 'tangara', 'rodovia eng. lineu bonato'),
(3, 'sc', 'tangara', 'rua sao paulo 499'),
(4, 'sc', 'iomere', 'rua das olivias 123'),
(5, 'sc', 'rio das pedras', 'rua dos quartzos 334');

select * from atv_end_clientes;

insert into atv_funcionarios (nome, d_nascimento) values
('ana paula', '1997-04-21'),
('juliano', '1982-11-27');

select * from atv_funcionarios;

insert into atv_produtos (categoria, nome, valor_un) values
('perifericos', 'mouse', 49.99),
('perifericos', 'teclado', 89.99),
('perifericos', 'headset', 122.50),
('hardware', 'ssd nvme', 149.99),
('hardware', 'memoria ram 8gb ddr4', 76.99),
('videogame', 'xbox one black', 2999.99),
('videogame', 'playstation 5', 3999.99);

select * from atv_produtos;

insert into atv_vendas (data_venda, id_produto, quantidade, id_cliente, id_funcionario) values 
('2025-04-01', 1, 2, 1, 1),
('2025-04-01', 2, 1, 2, 1),
('2025-04-01', 3, 2, 3, 2),
('2025-04-01', 1, 1, 4, 2),
('2025-04-01', 5, 1, 5, 1),
('2025-04-02', 4, 2, 1, 2),
('2025-04-02', 6, 1, 2, 1),
('2025-04-02', 7, 1, 3, 1),
('2025-04-02', 3, 2, 4, 1),
('2025-04-02', 1, 1, 5, 2);











